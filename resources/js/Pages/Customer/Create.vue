
<script setup>
import { useForm } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue';
const form = useForm({
  formcsname: '',
  formcsformnum: '',
  formcsdetails: '',
})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                     <div class="container">
        <h2 class="my-4">Contact Form</h2>
        <form @submit.prevent="form.post('/customer/save')">
            <div class="mb-3">
                <label for="cname" class="form-label">Company Name</label>
                <input type="text"  v-model="form.formcsname" class="form-control" id="cname" name="cname" placeholder="Enter company name" required>
            </div>
            
            <div class="mb-3">
                <label for="cphonenum" class="form-label">Phone Number</label>
                <input type="text"  v-model="form.formcsformnum" class="form-control" id="cphonenum" name="cphonenum" placeholder="Enter phone number" required>
            </div>
            
            <div class="mb-3">
                <label for="cdetails" class="form-label">Details</label>
                <textarea class="form-control"  v-model="form.formcsdetails" id="cdetails" name="cdetails" rows="4" placeholder="Enter details" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
