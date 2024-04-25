<template>
    <div>
        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Food</th>
                <th scope="col">Price</th>
                <th scope="col">Food Details</th>
                <th scope="col">Read</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>

            <tbody class="blog_block" v-for="foodv in foodpassprops" :key="foodv.id">
              <tr>
                    <th scope="row">{{ foodv.id }}</th>
                    <td> {{ foodv.foodname }} </td>
                    <td> {{ foodv.foodprice }} </td>
                    <td> {{ foodv.fooddetails }} </td>
                    <td> <Link :href="`#`">Read More</Link> </td>
                    <td> <Link :href="`#`">Edit Post</Link></td>
                    <td> <Link :href="`#`" method="DELETE">Delete Post</Link> </td>
              </tr>
            </tbody>
          </table>
    </div>
</template>



<script setup>
import{defineProps} from 'vue';
import { Link } from '@inertiajs/vue3';
defineProps({
    foodpassprops: Array
});
</script>
