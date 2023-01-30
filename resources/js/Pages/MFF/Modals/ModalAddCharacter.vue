<script setup>
import { ref } from 'vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import DialogModal from '@/Components/DialogModal.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';
import ButtonAdd from '@/Components/ButtonAdd.vue';
import Select from '@/Components/Select.vue';
import { usePage } from '@inertiajs/inertia-vue3'


const emit = defineEmits(["close"]);

var props = defineProps(
    {
       instintos:Object
    }
);

const arregloPersonajes = ref([]);

const addCharacterToArray = () =>
{
   let newObjPj = {};
}

const close = () => {
        
        emit('close');
    };

</script>
<template>
         <DialogModal  @close="close()">
           <template #title>
               <h2 style="font-weight:bolder">Nuevos personajes</h2>
            </template>
            <template #content>
               <ButtonAdd @click="addCharacterToArray">Agregar Personaje</ButtonAdd>
               <div class="flex flex-row flex-wrap">
                <div class="shrink-0">
                  <InputLabel>Nombre</InputLabel>
                  <TextInput type="text"></TextInput>
                </div>
                <div class="shrink-0">
                  <InputLabel>Tipo de instinto</InputLabel>
                  <Select>
                    <option selected disabled>Selecciona un tipo de instinto</option>
                    <option v-for="instinto in instintos" :key="instinto.id">
                        {{instinto.nombre}}
                    </option>
                  </Select>
                </div>
               </div>
            </template>
            
            <template #footer>
                <SecondaryButton  @click="close()" class="closeModal1" style="float:right">
                      Cerrar
                </SecondaryButton>
            </template>
        </DialogModal>
</template>
