<template>
  <div class="addItem flex items-center justify-center border-b border-purple-300 py-2">
    <input type="text" v-model="inputItem.name" class="appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-2 leading-tight focus:outline-none" placeholder="add todo" aria-label="Full name">
    <div class="icon cursor-pointer text-4xl text-purple-300" :class="[inputItem.name? 'text-purple-500':'']" @click="addItem()">
    <i class="fas fa-file-medical"></i>
    </div>
  </div>
</template>

<script>
export default {
  props:['inputItem'],
  methods:{
    addItem(){
      if(this.inputItem.name == ''){
        return ;
      }
      axios.post('api/item/store',{
        item:this.inputItem
      })
      .then((res)=>{
        if(res.status == 201){
          this.inputItem.name = '';
        }
      })
      .catch((err)=>{
        console.log(err)
      })
      this.$emit('addNew')
    }
  }
}
</script>

<style>

</style>