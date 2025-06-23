<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <div>
        <header>
            <nav>
                <div class="space-x-6">
                    <Link :href="route('home')" class="nav-link">Home</Link>
                </div>


                <div v-if="$page.props.auth.user" class="space-x-6 flex">
                    <img class="avatar" :src="'storage/' + $page.props.auth.user.avatar" alt="">
                    <Link :href="route('dashboard')"  as="button" type="button" class="nav-link">Dashboard</Link>
                    <Link :href="route('logout')" method="post" as="button" type="button" class="nav-link">Logout</Link>
                </div>
                <div v-else class="space-x-6">
                    <Link :href="route('register')" class="nav-link">Register</Link>
                    <Link :href="route('login')" class="nav-link">Login</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template>