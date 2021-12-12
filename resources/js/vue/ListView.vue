<template>
<div>
  <div v-for="(item,idx) in items" :key="idx">
    <ListItem class="mb-3" :item="item" @itemchanged="$emit('reload')" @itemdeleted="$emit('reloaddelete')"/>
  </div>
</div>
</template>

<script>
import ListItem from "./ListItem.vue";
export default {
  props:['items'],
  components:{
    ListItem
  }
}
</script>

<style lang="scss">
</style>
