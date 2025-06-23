<script setup>
import { useForm } from '@inertiajs/vue3';
import TextInput from '../Components/TextInput.vue';

const form = useForm({
    email: null,
    password: null,
    remember: null
})

const submit = () => {
    form.post(route('login'), {
        onError: () => form.reset('password')
    });
};

</script>

<template>
    <Head title="Login" />

    <h1 class="title">Login</h1>
    <div>
        <form @submit.prevent="submit">

            <TextInput name="email" type="email" v-model="form.email" :message="form.errors.email"/>
            <TextInput name="password" type="password" autocomplete="new-password" v-model="form.password" :message="form.errors.password"/>
            
            <div class="flex">
                <label for="remember_me">Remember me</label>
                <input type="checkbox" v-model="form.remember" id="remember_me">
            </div>
            <div>
                <p class="text-slate-600 mb-2">Need Account <a :href="route('register')" class="text-link">Register</a> </p>
                <button class="primary-btn" :disabled="form.processing">Login</button>
            </div>
            
        </form>
    </div>
</template>