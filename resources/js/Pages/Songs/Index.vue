<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import TableObj from '@/Components/TableObj.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({});

const title = {
    t1: 'Song',
    t2: 'Autor',
    t3: 'Album'
}

const props = defineProps({
    songs:Object
});

const song = props.songs;

</script>

<template>
    <Head title="Songs" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Songs</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <TableObj v-bind:title="title" v-bind:song="song"/>
            </div>

            <div class="max-w-7xl py-2 mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm sm:rounded-lg">
                    <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Nuevo regitro</button>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>