<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Carrusel from  '../Pages/DashboardPartials/Carrusel.vue';

</script>

<template>
    <AppLayout title="Inicio">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
               <div>
                  <Carrusel></Carrusel>
               </div>
            </div>
        </div>
    </AppLayout>
</template>
