<!-- <script>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
export default {
    components:{
        Link
    },
props:{
    customerpass:{
        type:Array,
        default:[]
    }
}
}
</script> -->
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import{defineProps} from 'vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    customerpass: Array
});
</script>
<template>
      <AppLayout title="Customer">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Customer
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              
              <div class="text-center">
                <button type="button" class="btn btn-primary btn-lg btn-block" ><Link :href="`/customer/create`" >Add Post</Link></button>
              </div>
              <div class="col-md-3 col-sm-3 col-xs-3">&nbsp;</div>
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div>       
                        <table class="table">
                            <thead class="thead-dark">
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Details</th>
                                <th scope="col">Read</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                              </tr>
                            </thead>

                            <tbody class="blog_block" v-for="customersv in customerpass" :key="customersv.id">
                              <tr>
                                    <th scope="row">{{ customersv.id }}</th>
                                    <td> {{ customersv.csname }} </td>
                                    <td> {{ customersv.csphonenum }} </td>
                                    <td> {{ customersv.csdetails }} </td>
                                    <td> <Link :href="`#`">Read More</Link> </td>
                                    <td> <Link :href="`#`">Edit Post</Link></td>
                                    <td> <Link :href="`#`" method="DELETE">Delete Post</Link> </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout> 
</template>



<style>
</style>
