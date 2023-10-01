<script setup>
const props = defineProps({
    title:Object,
    song:Object
});

</script>

<template>        
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{ props.title.t1 }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ props.title.t2 }}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{ props.title.t3 }}
                    </th>

                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="songs, i in song" :key="songs.id" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ songs.titulo }}
                    </th>
                    <td class="px-6 py-4">
                        {{ songs.autor }}
                    </td>
                    <td class="px-6 py-4">
                        {{ songs.album }}
                    </td>
                    <td class="px-6 py-4 text-right">
                        <button type="button" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900"
                        >Eliminar</button>
                        <button type="button" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center mr-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800"
                        data-bs-toggle="model"
                        data-bs-target="#modalEdit">Editar</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
</template>