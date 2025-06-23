<script setup>
import PaginationLinks from './Components/PaginationLinks.vue';

defineProps({
    users: Object
})

</script>

<template>
    <Head :title="$page.component" />
    <h1>Home Page</h1>
    <div v-for="user in users.data">
        {{ user.name }}
    </div>
        
        <PaginationLinks  :paginator="users"/>
</template>