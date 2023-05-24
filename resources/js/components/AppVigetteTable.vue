<template>
  <div>



    <div class="d-flex justify-content-between mb-3">

      <div class="d-flex justify-content-between  align-items-center">

        <button  @click.prevent="imprimerVignettes" class="btn btn-danger mx-2">
          <div class="spinner-border" role="status" v-if="isLoading">
            <span class="visually-hidden" >Loading...</span>
          </div>
          <template  v-else>
            <i class=" fa fa-print"></i>
            Imprimer
          </template>

        </button>

        <div class="d-flex justify-content-between  align-items-center">
          <h3 class="card-title mx-5"><strong>Total vignettes à imprimer  {{selecToPrint.length}}</strong></h3>
          <h4 class="card-title mr-3">Total vignettes  {{vignettes.length}}</h4>
        </div>

      </div>

      <div class="">
        <a href="/administration/vignettes/create" class="btn btn-primary"> Ajouter une vignettes ici <i class=" fa fa-save"></i></a>
      </div>
    </div>

    <div class="">
      <table id="datatable" class="table table-bordered dt-responsive nowrap"
             style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
          <th>
            <div class="form-check0">
              <input v-model="selectall" class="form-check-input" type="checkbox"   id="flexCheckDefault">
              <br>
              <label class="form-check-label" for="flexCheckDefault">
                Tous {{selectall}}
              </label>
            </div>
          </th>
          <th>Id</th>
          <th>Vignettes</th>
          <th>Entreprise</th>
          <th>Immatriculation</th>
          <th>Engin</th>
          <th>Année</th>

          <th>Action</th>
        </tr>
        </thead>

        <tbody>

        <tr v-for="v in vignettes">
          <td>
            <div class="form-check">
              <input v-model="v.selectionner" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            </div>
          </td>
          <td>{{v['id']}}</td>
          <td><img :src="v['img']"  style="height: 100px;" alt=""></td>
          <td>{{v['entreprise']}}</td>
          <td>{{v['immatriculation']}}</td>
          <td>{{v['typeengin']}}</td>
          <td>{{v['annees']}}</td>

          <td>
            <a  :href="`/administration/vignettes/${v['id']}/edit`" class="btn btn-sm btn-success m-1">
              <i class=" fa fa-pen"></i>
            </a>

            <a href="#" class="btn btn-sm btn-danger m-1">
              <i class=" fa fa-trash"></i>
            </a>
            <a target="_blank" :href="`/administration/print/${v['id']}`" class="btn btn-sm btn-primary m-1">
              <i class=" fa fa-print"></i>
            </a>
          </td>
        </tr>


        </tbody>
      </table>

    </div>
  </div>





      <pre>
        {{items}}
      </pre>


</template>

<script setup>
import {ref, defineProps, computed, watch, onMounted} from 'vue'

import {usePrintelements } from '../composable/usePrintelements'
import axios from "axios";

const {  setPrintitems,items} = usePrintelements()

const  selectall = ref(false) ;
const  selecToPrint = ref([]) ;
const  vignettes = ref([]) ;
const  isLoading = ref(false) ;

const props = defineProps({
  listvignettes:{}
})

onMounted(()=>{

  let rep = JSON.parse(props.listvignettes).map((ele)=>{
    ele.selectionner =  false
    return ele ;
  })
  // vignettes
  vignettes.value =  rep ;
})

 watch(selectall,(value) => {
     if (value){
       vignettes.value.forEach(el=>el.selectionner=true)
         console.log(value)
     }else {
       vignettes.value.forEach(el=>el.selectionner=false)
     }
    selecToPrint.value =  vignettes.value.filter(ele=>ele.selectionner===true)
 })


watch(() => vignettes.value.map((v) => v.selectionner), (newValues) => {
  selecToPrint.value = vignettes.value.filter((_, index) => newValues[index]);

  setPrintitems(selecToPrint.value)
});

const downloadFileFromStream = (urlPdf, filename) => {

  const url =urlPdf;

  const link = document.createElement('a');
  link.href = url;
  link.download = filename;
  link.style.display = 'none';
  document.body.appendChild(link);

  link.click();

  document.body.removeChild(link);
  URL.revokeObjectURL(url);
};

const imprimerVignettes = async () => {
  isLoading.value =  true
   const oldUrl = "/administration/print-all?type=rouge" ;
  const urlLink = window.location.href
  var hashIndex = urlLink.lastIndexOf("#");
  const urlValue = urlLink.substr(hashIndex + 1);
   const url ='/administration/api-print' ;
  const data = items.value.map(ele=>ele.id);
  console.log(data)
    try{
      const resp = await  axios.post(url,{ids:data,type:urlValue});
      console.log('ic',resp.data)
      const filename = 'myfile.pdf';
      downloadFileFromStream(resp.data.pdf, filename);
    }catch (e) {
      console.log(e)
    }finally {
      isLoading.value =false
    }
}
</script>

<style scoped>

</style>
<!--
<table id="datatable" class="table table-bordered dt-responsive nowrap"
       style="border-collapse: collapse; border-spacing: 0; width: 100%;">
<thead>
<tr>
    <th>Id</th>
    <th>Vignettes</th>
    <th>Entreprise</th>
    <th>Immatriculation</th>
    <th>Engin</th>
    <th>Année</th>
    <th>Type de vignettes</th>
    <th>Action</th>
</tr>
</thead>

<tbody>
@foreach($listvignettes as $k=>$v)
<tr>
    <td>{{$v->id}}</td>
    <td><img src="{{$v->img}}" alt="{{$v->entreprise}}" style="height: 100px;"></td>
    <td>{{$v->entreprise}}</td>
    <td>{{$v->immatriculation}}</td>
    <td>{{$v->typeengin}}</td>
    <td>{{$v->annees}}</td>
    <td>
        @php

        $type = "";
        $c = "";
        switch ($v->typeimpression):
        case 'images/vignettes/vignette-vert.png';
        $type = 'vert';
        $c = 'bg-success';
        break;
        case 'images/vignettes/vignette-jeune.png';
        $type = 'jaune';
        $c = 'bg-warning';
        break;

        case 'images/vignettes/vignette-bleu.png';
        $type = 'bleu';
        $c = 'bg-primary';
        break;
        case 'images/vignettes/vignette-rouge.png';
        $type = 'rouge';
        $c = 'bg-danger';
        break;

        endswitch;
        @endphp

        <span class="badge {{$c}}"> {{$type }}</span>
    </td>
    <td>
        <a  href="{{route('administration.vignettes.edit',$v->id)}}" class="btn btn-sm btn-success">
            <i class=" fa fa-pen"></i>
        </a>

        <a href="{{route('administration.vignettes.edit',$v->id)}}" class="btn btn-sm btn-danger">
            <i class=" fa fa-trash"></i>
        </a>
        <a target="_blank" href="{{route('administration.print',$v->id)}}" class="btn btn-sm btn-primary">
            <i class=" fa fa-print"></i>
        </a>
    </td>
</tr>
@endforeach

</tbody>
</table>-->
