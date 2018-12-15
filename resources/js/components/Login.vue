<template>
    <v-app id="inspire">
        <v-content>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Login form</v-toolbar-title>
                                <v-spacer></v-spacer>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field prepend-icon="person" v-model="name" name="login" label="Login" type="text"></v-text-field>
                                    <v-text-field id="password" prepend-icon="lock" v-model="password" name="password" label="Password" type="password"></v-text-field>
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                <v-spacer></v-spacer>
                                <v-btn color="primary" @click.prevent="submit">Login</v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>
    </v-app>
</template>

<script>
    export default {
        data: () => ({
            drawer: null,
            name:"",
            password:""
        }),
        props: {
            source: String
        },
        methods:{
            submit(){
                this.$http.post('localhost:8000/login',{
                    name:this.name,
                    password:this.name
                }).then(response => {
                    console.log(response)
                }).catch(err => {
                    console.log(err)
                })
            }
        }
    }
</script>
