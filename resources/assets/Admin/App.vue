<template>
    <main class="main">
        <Sidebar/>
        <!-- Main Content -->
        <section class="content home">
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-lg-12">
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </section>
    </main>
</template>

<script>
    import Sidebar from './Components/Layout/Sidebar';

    export default {
        created() {
         /*   axios.get('/profile').then(response => {
                localStorage.setItem('USER_INFORMATION', JSON.stringify(response.data));
            }).catch(error => this.errorNotify(error))*/
        },
        components: {Sidebar}
    }
</script>
