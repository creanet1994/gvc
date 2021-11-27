<template>
    <app-layout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
    <div v-role="'Admin'">
        Solo el aaadmin puede ver.
    </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'
    import Welcome from '@/Jetstream/Welcome.vue'


    export default {
            components: {
            AppLayout,
            Welcome,
        }
    }
</script>
