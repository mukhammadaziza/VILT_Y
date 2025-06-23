<script>

</script>

<template>
    <div v-if="$page.props.auth.user" class="title text-2xl">
        Welcome, {{ $page.props.auth.user.name }}
    </div>
    <div v-else>
        Login Needed
    </div>
</template>