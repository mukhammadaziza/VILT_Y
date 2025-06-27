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

// const search = ref(props.searchTerm);

// watch(search, debounce(
//     (q) => {router.get('/', { search: q }, { preserveState: true })},
//     500
//     )
// ) 

</script>

<template>
    <Head :title="$page.component" />
    
    <h1>Posts</h1>
    <button class="p-2 bg-blue-300 rounded">Create new post</button>
    <!-- <div v-if="$page.props.auth.user">

        <div class="flex">
            <div class="w-1/4">
                <input type="search" placeholder="Search here" v-model="search">
            </div>
        </div>
        
        <div v-for="user in users">
            {{ user.name }} 
            <div v-if="can.delete_user">
                <button>Delete</button>
            </div>
        </div>
        <PaginationLinks  :paginator="users"/>
    </div>
    <div v-else>
        <h1>Login or register to see users</h1>
    </div> -->
        
</template>