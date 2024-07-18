<script setup>
  import { ref } from 'vue'
  import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

const theme = ref('light')

function onClick () {
  theme.value = theme.value === 'light' ? 'dark' : 'light'
}


 
  
</script>



    
            <template>
            
        <v-responsive>
          <v-app :theme="theme">
            <v-app-bar class="px-3">
              <v-spacer></v-spacer>
              <v-btn
                :prepend-icon="theme === 'light' ? 'mdi-weather-sunny' : 'mdi-weather-night'"
                text="Toggle Theme"
                slim
                @click="onClick"
              ></v-btn>
              <FontAwesomeIcon :icon="['fas', 'sun']" />
       
            </v-app-bar>

            
            <v-main>
        <v-container>
          <v-card title="Card title" text="LOREM IPSUM"></v-card>
        </v-container>
      </v-main>

    
            
           
          </v-app>
        </v-responsive>

      </template>
      

         

        
    



<style>





</style>