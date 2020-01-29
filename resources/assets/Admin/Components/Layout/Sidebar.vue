<template>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info">
                        <div class="image"><a href="profile.html"><img src="/admin-assets/assets/images/profile_av.jpg"
                                                                       alt="کاربر"></a>
                        </div>
                        <div class="detail">
                            <h4>مدیر سیستم</h4>
                        </div>
                        <a href="sign-in.html" title="خروج از سیستم"><i class="zmdi zmdi-power"></i></a>
                    </div>
                </li>
                <li class="active">
                    <router-link to="/" class="menu-toggle">
                        <i class="zmdi zmdi-home"></i>
                        <span>داشبورد</span>
                    </router-link>

                </li>
                <li>
                    <router-link to="/categories" href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-apps">
                    </i>
                        <span>مدیریت دسته بندی ها</span>
                    </router-link>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="zmdi zmdi-file"></i>
                        <span>مدیریت پست ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <router-link to="/posts/videos">ویدیویی</router-link>
                            <router-link to="/posts/images">عکس</router-link>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="zmdi zmdi-comment"></i>
                        <span>مدیریت نظرات</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <router-link to="/comments/approved">نظرات تایید شده</router-link>
                            <router-link to="/comments/pending">نظرات تایید نشده</router-link>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </aside>
</template>
<script>
    export default {
        data() {
            return {
                user: {}
            }
        },
        created() {
            this.user = JSON.parse(localStorage.getItem('USER_INFORMATION'));
        }
    }
</script>