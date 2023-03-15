<template>

    <div class="row">
        <div class="col-lg-6">
            <form>
                <div class="mb-3">
                    <input type="file"  class="form-control" @change="handleFileUploads"/>
                </div>
                <button type="submit" class="btn btn-primary">Importer <i class="fa fat-save"></i></button>
            </form>

        </div>
        <div class="col-lg-2"></div>
        <div class="col-lg-4">

        </div>
    </div>
    <div class="row">
        <pre>
            {{vignettesAimporters}}
        </pre>

        <table class="table" v-if="fileData[0]">
            <thead>
            <tr>
                <th scope="col" v-for="hInfo in fileData[0][0]" :key="hInfo">{{hInfo}}</th>

            </tr>
            </thead>
            <tbody>
            <tr v-for="(v,key) in  vignettesAimporters">
                <th v-for="h in (fileData[0][0].length)" scope="row">{{v[h-1]}}</th>

            </tr>

            </tbody>
        </table>


    </div>
</template>

<script setup>
import {createToast} from "mosha-vue-toastify";

import {computed, ref} from "vue";
const fileData = ref([])
const file = ref('')
const hasError = ref(false)
const isLoading = ref(false)
const uploadPercentage = ref(0)

const acceptFiles = [
    'text/csv',
    'text/xlsx',
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
]
const handleFileUploads =async ($event) =>{
    const uploadFile = $event.target.files[0];
    console.log(uploadFile.type)
    if ( !acceptFiles.includes(uploadFile.type)   ){
        hasError.value = true
        return  createToast("Le fichier n'est pas valide",{type:"danger",'position':'bottom-right'})
    }
    uploadPercentage.value = 0
    file.value =uploadFile
    let formData = new FormData();
    formData.append('file', file.value);
    // store.commit('citoyens/SET_FILECSV',formData)
    // store.commit('citoyens/SET_ISFILELOADING',true)
    try {
        isLoading.value = true
        const res = await axios.post('/administration/uploadcsv',formData,{
            onUploadProgress:function (progressEvent) {
                uploadPercentage.value = parseInt(Math.round((progressEvent.loaded/progressEvent.total) *100 ))
            }.bind(this)
        })
        fileData.value = res.data ;
        // await  store.dispatch('citoyens/GET_CITOYENS',res.data)
        // store.commit('citoyens/SET_ISFILELOADING',false)
        // createToast('Le fichier a bien été uploader avec succès ',{type:"success",'position':'bottom-right'})
    }catch (e) {
        console.log(e.response.data)
        console.log('FAILURE!!');
        hasError.value = true
        // store.commit('citoyens/SET_ISFILELOADING',false)
    }finally {
        isLoading.value = false
    }
}

        const vignettesAimporters = computed(()=>fileData.value[0]?.slice(1) || [])
</script>

<style scoped>

</style>
