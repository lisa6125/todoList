<template>
  <div class="todoListContainer h-screen flex items-center justify-center bg-indigo-50 ">
    <div class="card overflow-y-auto m-4 w-full lg:w-3/4 lg:max-w-lg bg-white rounded shadow p-6 px-12">
      <div class="heading mb-6">
        <h2 class="title font-mono text-4xl"> Todo List</h2>
        <AddItemForm :inputItem="inputItem" @addNew="getList()"/>
      </div>
      <ListView :items="items" @reload="getList" @reloaddelete="getList"/>
    </div>
  </div>
</template>

<script>
import AddItemForm from "./AddItemForm.vue";
import ListView from "./ListView.vue";
export default {
  components:{
    AddItemForm,ListView
  },
  data(){
    return {
      inputItem:{
        'name':''
      },
      items:[]
    }
  },
  methods:{
    getList(){
      axios.get('api/items')
      .then((res)=>{
        this.items = res.data
      })
      .catch((err)=>{
        console.log(err)
      })
    }
  },
  mounted(){
    this.getList();
  }
}
</script>

<style lang="scss" scoped>
.card{
  height: 80%;
  max-height: 600px;
  &::-webkit-scrollbar-track{
    margin-top: 100px;
  }
  &::-webkit-scrollbar
  {
    width: 8px;
    background-color: #ffffff00;
  }

  &::-webkit-scrollbar-thumb
  {
    border-radius: 8px;
    background-color: #cecece;
    margin-top: 20px;
  }
}
</style>