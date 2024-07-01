<script setup>
  import { reactive } from 'vue'
  import { router } from '@inertiajs/vue3'
  import { Link } from '@inertiajs/vue3'
 

  const props = defineProps({
    errors: {
        type: Object,
        required: true
    },
    message: {
        type: String,
        required: false
    }
});

  const form = reactive({
    name: null,
    password: null,
  })


function submit() {
   router.post('/', form)
}

</script>



<template>
  <div class="whole-bg">
  <div class="background">
    
<form @submit.prevent="submit">
    <h3><span class="red-color-ccm">CC</span><span class="black-color-ccm">M</span></h3>

    <label for="username">Username</label>
    <input type="text" placeholder="Username" id="name" v-model="form.name">
    <p v-if="props.errors.name" class="text-danger">{{ props.errors.name }}</p>

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" v-model="form.password">
    <p v-if="props.errors.password" class="text-danger">{{ props.errors.password }}</p>

    <button type="submit">Log In</button>
</form>

</div> 
</div>
</template>







<style >
*,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.whole-bg {
  background-color: #080710;
  width: 100%;
  height: 100vh;
}

.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

.black-color-ccm{
  color: black;
  font-weight: 900;
}

.red-color-ccm{
  
  color: red;
  font-weight: 900;

}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}


</style>

