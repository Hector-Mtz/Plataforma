<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import ButtonAdd from '@/Components/ButtonAdd.vue';
import UploadFile from '@/Components/UploadFile.vue';
import TextInput from '@/Components/TextInput.vue';
import { usePage } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import ModalAddCharacter from '../MFF/Modals/ModalAddCharacter.vue';


const user = usePage().props.value.user;
//console.log(user.cans.can_edit_button);

var props = defineProps({
    instintos:Object
});

const modalNewCharacter = ref(false);
const openNewCharacter = () => 
{
   modalNewCharacter.value = true;
}
const closeNewCharacter = () =>
{
    modalNewCharacter.value = false;
}

const CategoryForm = useForm({
   imagen:null,
   text:''
});

const retornarFile = (file) => 
{
  CategoryForm.imagen = file;
}

const save = () =>
{
    CategoryForm.post(route('asset.store'),
    {
       onFinish: () => CategoryForm.reset(),
       onSuccess: () =>  close() 
    });
}
</script>

<template>
    <AppLayout title="Personajes">
        <template #header>
           <div class="flex flex-wrap">
            <div class="basis-3/4">
                 <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                   Personajes
                </h2>
            </div>
            <div class="1/2">
               <ButtonAdd  v-if="!user.cans.can_add_character" @click="openNewCharacter">
                  Agregar
               </ButtonAdd>
            </div>
           </div>
        </template>
        <section>
                
        </section>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                   <UploadFile  @retornar="retornarFile"></UploadFile>
                   <input type="text" v-model="CategoryForm.text">
                   <button @click="save">Guardar</button>
                </div>
            </div>
        </div>
      <ModalAddCharacter @close="closeNewCharacter" :show="modalNewCharacter" :instintos="instintos">
      </ModalAddCharacter>
    </AppLayout>
</template>
