import {ref} from "vue";

export  function usePrintelements  (){
    const  items = ref([])
      const  setPrintitems = (params)=>{
        items.value = params
        return { items }
    }

    return { setPrintitems,items }

}