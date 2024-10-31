<script>
import axios from 'axios';

export default {
    data() {
        return {
            users: [],
            form: {
                id: null,
                name: '',
                email: '',
                password: '',
                photo: null,
                birth_place: '',
                birth_date: '',
                school_origin: ''
            }
        };
    },
    methods: {
        async fetchUsers() {
            const response = await axios.get('/api/users');
            this.users = response.data;
        },
        onFileChange(event) {
            this.form.photo = event.target.files[0];
        },
        async submitForm() {
            const formData = new FormData();
            Object.keys(this.form).forEach(key => {
                formData.append(key, this.form[key]);
            });

            if (this.form.id) {
                await axios.post(`/api/users/${this.form.id}`, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });
            } else {
                await axios.post('/api/users', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    }
                });
            }
            this.resetForm();
            this.fetchUsers();
        },
        editUser(user) {
            this.form = { ...user, photo: '' };
        },
        async deleteUser(id) {
            await axios.delete(`/api/users/${id}`);
            this.fetchUsers();
        },
        resetForm() {
            this.form = { id: null, name: '', email: '', password: '', photo: null, birth_place: '', birth_date: '', school_origin: '' };
        }
    },
    mounted() {
        this.fetchUsers();
    }
};
</script>

<template>
    <div>
        <h1>User Profiles</h1>
        <form @submit.prevent="submitForm">
            <input type="text" v-model="form.name" placeholder="Name" required />
            <input type="email" v-model="form.email" placeholder="Email" required />
            <input type="file" @change="onFileChange" />
            <input type="text" v-model="form.birth_place" placeholder="Tempat Lahir" required />
            <input type="date" v-model="form.birth_date" required />
            <input type="text" v-model="form.school_origin" placeholder="Asal Sekolah" required />
            <button type="submit">{{ form.id ? 'Update' : 'Create' }} User</button>
        </form>

        <ul>
            <li v-for="user in users" :key="user.id">
                <img v-if="user.photo" :src="`/storage/${user.photo}`" alt="Profile Photo" width="50" />
                {{ user.name }} - {{ user.email }} - {{ user.birth_place }} - {{ user.birth_date }} - {{
                    user.school_origin }}
                <button @click="editUser(user)">Edit</button>
                <button @click="deleteUser(user.id)">Delete</button>
            </li>
        </ul>
    </div>
</template>