<template>
<div class="flex items-center">
  <input type="checkbox" class="form-checkbox mr-3" @click="updateCheck()" v-model="item.completed"/>
  <span class="name" :class="{completed:item.completed}">{{item.name}}</span>
  <div class="icon" @click="deleteItem">
    <i class="fas fa-trash"></i>
  </div>
</div>
</template>

<script>
export default {
  props:["item"],
  data(){
    return {
      checkData:''
    }
  },
  methods:{
    // 因在後台處理了完成更新，因此前端不在處理
    updateCheck(){
      this.item.completed = !this.item.completed
      axios.put('api/item/'+this.item.id,{
        item:this.item
      })
      .then((res)=>{
        if(res.status == 200){
          this.$emit('itemchanged');
        }
      })
      .catch((err)=>{
        console.log(err)
      })
    },
    deleteItem(){
      axios.delete('api/item/'+this.item.id)
      .then((res)=>{
        if(res.status == 200){
          this.$emit('itemdeleted');
        }
      })
      .catch((err)=>{
        console.log(err)
      })
    }
  }
}
</script>

<style lang="scss" scoped>
.completed{
  color: rgb(206, 206, 206);
  text-decoration: line-through;
}
.name{
  flex-grow: 1;
}
.icon{
  display: inline-block;
  color: rgb(206, 206, 206);
  :hover{
    color: rgb(224, 75, 75);
    cursor: pointer;
  }
}
</style>