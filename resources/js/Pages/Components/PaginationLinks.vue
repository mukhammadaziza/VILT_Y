<script setup>
defineProps({
    paginator: {
        type: Object,
        required: true
    }
})

</script>

<template>
    <div>
        <span v-for="link in paginator.links">
            <Link v-if="link.url" :key="link.label" v-html="link.label" :class="{ 'text-red-500' : link.active }" :href="link.url"></Link>
            <Link v-else="link.url" v-html="link.label" class="p-2"></Link>
        </span>
        <p>Showing {{ paginator.from }} to {{ paginator.to }} of {{ paginator.total }} users</p>
    </div>
</template>