<script setup>
import { watch, ref } from 'vue';
import { router } from '@inertiajs/vue3';
import PaginationLinks from './Components/PaginationLinks.vue';
import { debounce } from 'lodash';

const props = defineProps({
    users: Object,
    searchTerm: String,
    can: Object
})

const search = ref(props.searchTerm);

watch(search, debounce(
    (q) => {router.get('/', { search: q }, { preserveState: true })},
    500
    )
) 

</script>

<template>
    <Head :title="$page.component" />
    <h1>Home Page</h1>

    <div class="flex">
        <div class="w-1/4">
            <input type="search" placeholder="Search here" v-model="search">
        </div>
    </div>
    <div v-for="user in users.data">
        {{ user.name }} 
        <div v-if="can.delete_user">
            <button>Delete</button>
        </div>
    </div>
        
        <PaginationLinks  :paginator="users"/>
</template>