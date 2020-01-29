import Dashboard from './Components/Dashboard/Index';

// ========================= Post Images =========================
import PostsImages from './Components/Posts/Images/Index';
import PostsImagesCreate from './Components/Posts/Images/Create';
import PostsImagesEdit from './Components/Posts/Images/Edit';
// ========================= Post Images =========================

// ========================= Post Videos =========================
import PostsVideos from './Components/Posts/Videos/Index';
import PostsVideosCreate from './Components/Posts/Videos/Create';
import PostsVideosEdit from './Components/Posts/Videos/Edit';
// ========================= Post Videos =========================

// ========================= Categories =========================
import CategoriesIndex from './Components/Categories/Index';
import CategoriesCreate from './Components/Categories/Create';
// ========================= Categories =========================

// ========================= Categories =========================
import CommentsApproved from './Components/Comments/Approved';
import CommentsPending from './Components/Comments/Pending';
// ========================= Categories =========================

export default [
    {path: '/', name: 'داشبورد', component: Dashboard},


    // ========================= Categories =========================
    {path: '/categories', name: 'دسته بندی ها', component: CategoriesIndex},
    {path: '/categories/create', name: 'افزودن دسته بندی', component: CategoriesCreate},
    // ========================= Categories =========================

    // ========================= Post Images =========================
    {path: '/posts/images', name: 'پست عکس', component: PostsImages},
    {path: '/posts/images/create', name: 'افزودن پست عکس', component: PostsImagesCreate},
    {path: '/posts/images/:id/edit', name: 'ویرایش پست عکس', component: PostsImagesEdit},
    // ========================= Post Images =========================

    // ========================= Post Videos =========================
    {path: '/posts/videos', name: 'پست ویدیویی', component: PostsVideos},
    {path: '/posts/videos/create', name: 'افزودن پست ویدیویی', component: PostsVideosCreate},
    {path: '/posts/videos/:id/edit', name: 'ویرایش پست ویدیویی', component: PostsVideosEdit},
    // ========================= Post Videos =========================

    // ========================= Comments  =========================
    {path: '/comments/approved', name: 'نظرات تایید شده', component: CommentsApproved},
    {path: '/comments/pending', name: 'نظرات تایید نشده', component: CommentsPending},
    // ========================= Comments  =========================
]
