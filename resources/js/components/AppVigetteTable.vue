<template>
<!--    <pre>-->
<!--          {{vignettes}}-->
<!--    </pre>-->

    <table id="datatable" class="table table-bordered dt-responsive nowrap"
           style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
        <tr>
            <th>
                <div class="form-check0">
                    <input v-model="selectall" class="form-check-input" type="checkbox"   id="flexCheckDefault">
                    <br>
                    <label class="form-check-label" for="flexCheckChecked">
                        Tous
                    </label>
                </div>
            </th>
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
                <span class="badge {{v['id']}}">  </span>
            </td>
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

</template>

<script setup>
import {ref, defineProps, computed, watch} from 'vue'

const  selectall = ref(false) ;

 const props = defineProps({
     listvignettes:{}
 })

 const vignettes = computed(()=>
{
    let rep = JSON.parse(props.listvignettes).map((ele)=>{
        ele.selectionner =  false
        return ele ;
    })
    // vignettes
    return rep ;

})

 watch(selectall,(value) => {
     if (value){


         console.log(value)
     }
 })
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
