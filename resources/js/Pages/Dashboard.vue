<script>

</script>

<template>
    <p class="p-4 bg-green-900">{{ $page.props.flash.message }}</p>
    <div v-if="$page.props.auth.user" class="title text-2xl">
        Welcome, {{ $page.props.auth.user.name }}
    </div>
    <div v-else>
        Login Needed
    </div>
</template>