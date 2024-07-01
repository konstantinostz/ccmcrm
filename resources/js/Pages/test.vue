<script setup>
defineProps({ customers: Object })



</script>



<template>
<h1>test</h1>

<p>{{ customers[0].name }} - {{ customers[0].password }} </p>

</template>