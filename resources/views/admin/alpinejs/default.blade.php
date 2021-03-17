<html>
    <head>
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css">
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>
        <!-- https://github.com/alpinejs/alpine -->
        <!-- <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v1.9.8/dist/alpine.js" defer></script> -->
        <style type="text/css">
            .pt-4 {
                padding-top: 1rem;
            }

            .mt-4 {
                margin-top: 1rem;
            }

            .flex {
                display: flex;
            }

            .justify-between {
                justify-content: space-between;
            }

            .transition {
                transition-property: background-color, border-color, color, fill, stroke, opacity, box-shadow, transform;
            }

            .transition-all {
                transition-property: all;
            }

            .ease-linear {
                transition-timing-function: linear;
            }

            .duration-75 {
                transition-duration: 75ms;
            }

            .duration-100 { 
                transition-duration: 100ms;
            }

            .duration-150 {
                transition-duration: 150ms;
            }

            .ease-in { 
                transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
            }

            .ease-out { 
                transition-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
            .ease-in-out { 
                transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            }

            .scale-75 {
                transform: scale(.75);
            }

            .origin-top-right {
                transform-origin: top right;
            }

            .tags-input {
        display: flex;
        flex-wrap: wrap;
        background-color: #fff;
        border-width: 1px;
        border-radius: .25rem;
        padding-left: .5rem;
        padding-right: 1rem;
        padding-top: .5rem;
        padding-bottom: .25rem;
        }

        .tags-input-tag {
        display: inline-flex;
        line-height: 1;
        align-items: center;
        font-size: .875rem;
        background-color: #bcdefa;
        color: #1c3d5a;
        border-radius: .25rem;
        user-select: none;
        padding: .25rem;
        margin-right: .5rem;
        margin-bottom: .25rem;
        }

        .tags-input-tag:last-of-type {
        margin-right: 0;
        }

        .tags-input-remove {
        color: #2779bd;
        font-size: 1.125rem;
        line-height: 1;
        }

        .tags-input-remove:first-child {
        margin-right: .25rem;
        }

        .tags-input-remove:last-child {
        margin-left: .25rem;
        }

        .tags-input-remove:focus {
        outline: 0;
        }

        .tags-input-text {
        flex: 1;
        outline: 0;
        padding-top: .25rem;
        padding-bottom: .25rem;
        margin-left: .5rem;
        margin-bottom: .25rem;
        min-width: 10rem;
        }

        .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
        * {
  box-sizing: border-box;
}

body {
  margin: 0;
  padding: 0;
}
h1,
h2,
h3,
h4,
h5,
h6 {
  font-family: "Nunito", sans-serif;
}
h1 {
  font-size: 66px;
  color: #fff;
  margin-bottom: 26px;
}
h2 {
  font-size: 30px;
  color: rgba(255, 255, 255, 0.8);
  letter-spacing: 0;
  line-height: 46px;
  margin-bottom: 54px;
}
p,
a,
span {
  font-family: "Lora", serif;
}
a:hover {
  text-decoration: none;
}
.navigation {
  position: absolute;
  width: 100%;
}
.business-navigation {
  background-color: #0078d7;
}
.navbar-brand {
  color: #fff !important;
  font-weight: 700;
}
.nav-color {
  color: #0078d7 !important;
}
.sign-in-link {
  color: #fff !important;
  font-size: 18px;
}
.sign-up-link {
  background-color: #0078d7;
  color: #fff;
  font-size: 18px;
  letter-spacing: 0;
  padding: 10px 10px 10px;
  text-align: center;
  -webkit-transition: box-shadow 0.3s;
  transition: box-shadow 0.3s;
  cursor: pointer;
}
.business-sign-up-link {
  background-color: #fff;
  color: #0078d7;
  font-size: 18px;
  letter-spacing: 0;
  padding: 10px 10px 10px;
  text-align: center;
  -webkit-transition: box-shadow 0.3s;
  transition: box-shadow 0.3s;
  cursor: pointer;
}
.hero {
  background-color: #0078d7;
  background-image: url("https://godwinekuma.github.io/we-connect/images/hero_banner.jpg");
  background-position: center center;
  background-size: cover;
  padding: 100px 0 150px;
}

.search-bar {
  padding: 11px 15px;
  width: 300px;
  border: none;
  outline: none;
}
.business-search-bar {
  padding: 11px 15px;
  border: none;
  outline: none;
}

.search-submit {
  display: inline-block;
  background-color: #fff;
  color: #0078d7;
  text-align: center;
  width: 60px;
  padding: 11px 15px;
}
.mobile-search-submit {
  display: inline-block;
  background-color: #fff;
  color: #0078d7;
  text-align: center;
  padding: 11px 15px;
}

.primary-heading {
  color: #0078d7;
  text-align: center;
  font-size: 45px;
}
.sign-in {
  min-height: 100vh;
  width: 100%;
  background-color: #0078d7;
  padding: 7.5% 0 7.5% 0;
}
.sign-up {
  min-height: 100vh;
  width: 100%;
  background-color: #0078d7;
  padding: 2% 0 7.5% 0;
}
.sign-up .home-link,
.sign-in .home-link {
  margin-bottom: 20px;
}
.sign-up-form,
.sign-in-form {
  background-color: #fff;
  padding: 25px;
  width: 400px;
}
.form-control {
  border-radius: 0px !important;
  outline: none;
}

.dashboard-navigation {
  width: 15%;
  background-color: #0078d7;
  color: #fff;
  position: fixed;
  height: 100vh;
}
.dashboard-navigation .nav-link {
  padding: 25px 15px;
  color: rgba(255, 255, 255, 0.8);
}
.dashboard-navigation .nav-link:hover {
  color: #fff;
  border-left: 2px solid #fff;
}
.dashboard-navigation .nav-link:active {
  color: #fff;
  border-left: 2px solid #fff;
}
.dashboard-main {
  width: 85%;
  margin-left: 15%;
  color: #333b4d;
}
.open-menu {
  display: none;
}
.navbar-profile-image {
  height: 30px;
  width: 30px;
}
.dashboard-main-content {
  background-color: #f5f5f5;
  min-height: 100vh;
}

.dashboard-reviews {
  background-color: #fff;
}
.card {
  border-radius: 0px !important;
}
.card-name {
  color: #0078d7;
  font-size: 0.8rem;
}
.card-title {
  font-size: 0.9rem;
}
.card-text {
  font-size: 1rem;
}
.business-contact-details {
  background-color: #0078d7;
}
.business-contact-details p {
  color: #fff !important;
}
.business-contact-heading {
  color: #fff !important;
}
.profile-summary {
  position: relative;
  min-height: 300px;
  padding-left: 15px;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-background-size: cover;
  background-size: cover;
}
.profile-summary-content {
  bottom: 10px;
  position: absolute;
  left: 0;
  right: 0;
}
.company-logo {
  border-radius: 4px;
}
.profile-tabs .nav-item {
  border: none;
  margin-right: 0px;
  padding: 15px 30px;
  letter-spacing: 0.2px;
  background-color: #eee;
  font-weight: bold;
  cursor: pointer;
  border-radius: 0;
  text-align: center;
  color: #333b4d;
}
.user-profile-content input,
.user-profile-content select,
.user-profile-content textarea,
.tab-pane input,
.tab-pane textarea {
  background-color: #eee !important;
}
.btn {
  border-radius: 0px;
}
.business-listing {
  background-color: #f5f5f5;
}
.particular-business {
  height: 200px;
}
.particular-details {
  background-color: #fff;
  overflow: hidden;
}
.particular-details a {
  color: #0078d7 !important;
}
.particular-image {
  object-fit: cover;
}
.mobile-search-form {
  height: 300px;
  display: none;
}
.visible-search {
  display: block !important;
  background-color: #0078d7;
  z-index: 1000;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
}
.body-overlay {
  background-color: rgba(0, 0, 0, 0.5);
}
.close-button {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
  color: #fff !important;
}
.business-details-heading {
  color: #0078d7 !important;
}
.index-mobile-search-submit {
  display: none !important;
}
.nav-tabs .active {
  color: #fff !important;
  background-color: #0078d7 !important;
}

@media (max-width: 768px) {
  .sign-up-form,
  .sign-in-form {
    width: 300px;
  }
  .dashboard-navigation {
    width: 50%;
    display: none;
  }
  .dashboard-main {
    width: 100%;
    margin-left: 0px;
  }
  .dashboard-reviews {
    margin-left: 0px !important;
  }
  .company-name {
    display: none;
  }
  .dashboardNav {
    display: block;
  }
  .dashboardContent {
    margin-left: 50%;
  }
  .open-menu {
    display: inline-block;
  }
  .particular-image {
    width: 35% !important;
  }
  .particular-details {
    width: 65% !important;
  }
  .particular-details p {
    display: none;
  }
  .business-search-form {
    margin-left: 0px !important;
  }
  .business-search-form .search-bar {
    display: none;
  }
  .navbar-brand {
    font-size: 15px !important;
  }
  .navbar-brand-image {
    height: 25px;
  }
  .navbar-toggler {
    background-color: #fff !important;
  }
  .sign-up-nav {
    margin-top: 10px;
  }
  .index-mobile-search-submit {
    display: inline-block !important;
  }
  .search-submit {
    display: inline-block;
    background-color: #fff;
    color: #0078d7;
    text-align: center;
    width: 35px;
    padding: 5px;
    margin-left: -20px;
  }
  .profile-tabs .nav-item {
    width: 100% !important;
  }
  .business-contact-details {
    padding: 5px;
  }
}

#photos {
  /* Prevent vertical gaps */
  line-height: 0;

  -webkit-column-count: 5;
  -webkit-column-gap: 0px;
  -moz-column-count: 5;
  -moz-column-gap: 0px;
  column-count: 5;
  column-gap: 10px;
}

#photos img {
  /* Just in case there are inline attributes */
  width: 100% !important;
  height: auto !important;
  margin-bottom: 10px;
}

@media (max-width: 1200px) {
  #photos {
    -moz-column-count: 4;
    -webkit-column-count: 4;
    column-count: 4;
  }
}
@media (max-width: 1000px) {
  #photos {
    -moz-column-count: 3;
    -webkit-column-count: 3;
    column-count: 3;
  }
}
@media (max-width: 800px) {
  #photos {
    -moz-column-count: 2;
    -webkit-column-count: 2;
    column-count: 2;
  }
}
@media (max-width: 400px) {
  #photos {
    -moz-column-count: 1;
    -webkit-column-count: 1;
    column-count: 1;
  }
}
        </style>
    </head>
    <body class="bg-gray-300 text-gray-800" >
        <header class="border-t-4 border-blue-700 bg-white shadow-md">
            <nav class="container mx-auto px-4 flex items-center justify-between py-4">
                <ul class="flex">
                    <li><a href="#">Home</a></li>
                </ul>
                <div class="relative" x-data="{ isOpen: false }">
                    <button 
                        @click="isOpen = !isOpen"
                        class="flex items-center" 
                        @keydown.escape="isOpen = false"
                    >
                        <img src="http://www.gravatar.com/avatar?d=mm" alt="avatar" class="w-8 h-8 rounded-full">
                        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M15.3 9.3a1 1 0 0 1 1.4 1.4l-4 4a1 1 0 0 1-1.4 0l-4-4a1 1 0 0 1 1.4-1.4l3.3 3.29 3.3-3.3z" class="heroicon-ui"></path></svg>
                    </button>
                    <ul
                        x-show.transition.in.duration.300ms.opacity.scale.25.origin.top.right.out.duration.300ms.opacity.scale.25.origin.top.right="isOpen"
                        @click.away="isOpen = false"
                        class="absolute font-normal bg-white shadow overflow-hidden rounded w-48 border mt-2 py-1 right-0 z-20"
                    >
                       <!--  x-transition:enter="transition transform origin-top-right ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-75"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition transform origin-top-right ease-out duration-200"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-75" -->
                        <li>
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Account</span>
                            </a>
                        </li>
                        <li class="border-b border-gray-400">
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" class="text-gray-600"><path d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z" class="heroicon-ui"></path></svg>
                                <span class="ml-2">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center px-3 py-3 hover:bg-gray-200">
                                <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="text-gray-600"><path d="M0 0h24v24H0z" fill="none"></path><path d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z"></path></svg><span class="ml-2">Logout</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container mx-auto px-4 xl:px-64 mt-12 mb-12">
            <h2 class="text-2xl font-bold">Modal</h2>

            <div x-data="{ isOpen: false }">
                <button
                    class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"    
                    @click="isOpen = true
                    $nextTick(() => $refs.modalCloseButton.focus())
                    "
                >
                    Open Modal
                </button>

                <div
                    style="background-color: rgba(0, 0, 0, .5)" 
                    class="mx-auto absolute top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto"   
                    x-show="isOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition ease-out duration-100"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"  
                >
                    <div class="container mx-auto rounded p-4 mt-2 overflow-y-auto">
                        <div class="bg-white rounded px-8 py-8">
                            <h1 class="font-bold text-2xl mb-3">Modal Title</h1>
                            <div class="modal-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro amet repellat recusandae.</p>
                            </div>
                            <div class="mt-4">
                                <button 
                                    class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"
                                    @click="isOpen = false"
                                    x-ref="modalCloseButton"
                                >
                                    Close Modal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto p-4 mb-4" x-data="{ tab: 'tab1' }">
            <h2 class="text-2xl font-bold">Tabs</h2>
            <ul class="flex border-b mt-6" >
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block rounded-t py-2 px-4 font-semibold hover:text-blue-800"  
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab1' }"
                        href="#"
                        @click.prevent="tab = 'tab1'"
                    >Tab 1</a>
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab2' }"
                        href="#"
                        @click.prevent="tab = 'tab2'"
                    >Tab 2</a
                    >
                </li>
                <li class="-mb-px mr-1">
                    <a
                        class="inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold"
                        :class="{ 'bg-white text-blue-700 border-l border-t border-r' : tab === 'tab3' }"
                        href="#" 
                        @click.prevent="tab = 'tab3'"
                    >Tab 3</a
                    >
                </li>
            </ul>
            <div class="content bg-white px-4 py-4 border-l border-r border-b pt-4">
                <div x-show="tab === 'tab1'">
                    Tab1 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>
                <div x-show="tab === 'tab2'">
                    Tab2 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>                
                <div x-show="tab === 'tab3'">
                    Tab3 content. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sunt, consectetur eos quod perferendis mollitia consequuntur natus, porro molestiae qui iusto deserunt rerum tempore voluptatum itaque. Ad, nisi esse cum quidem consequuntur ullam obcaecati.
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 mt-4" x-data="{ image: 'image1' }">
            <div>
                <img src="/admin/img/dammy/img01.png" alt="mac pro" x-show="image === 'image1'">
                <img src="/admin/img/dammy/img02.png" alt="mac pro" x-show="image === 'image2'">
                <img src="/admin/img/dammy/img03.png" alt="mac pro" x-show="image === 'image3'">
            </div>
            <div class="flex items-center mt-4">
                <a href="#" class="border border-transparent hover:border-blue-500" :class="{ 'border-blue-500' : image === 'image1'}" @click.prevent="image = 'image1'"><img src="/admin/img/dammy/img01.png" alt="mac pro" class="w-12"></a>
                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" :class="{ 'border-blue-500' : image === 'image2' }" @click.prevent="image = 'image2'"><img src="/admin/img/dammy/img02.png" alt="mac pro" class="w-12"></a>
                <a href="#" class="border border-transparent hover:border-blue-500 ml-2" :class="{ 'border-blue-500' : image === 'image3' }" @click.prevent="image = 'image3'"><img src="/admin/img/dammy/img02.png" alt="mac pro" class="w-12"></a>
            </div>
        </div>
        <div class="container mx-auto px-2 py-2" x-data="{
            faqs: [
                {
                    question: 'Why do I need Alpine JS?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores iure quas laudantium dicta impedit, est id delectus molestiae deleniti enim nobis rem et nihil.',
                    isOpen: false,
                },
                {
                    question: 'Why am I so awesome?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: false,
                },
                {
                    question: 'Why learn on Scrimba?',
                    answer: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi cumque, nulla harum aspernatur veniam ullam provident neque temporibus autem itaque odit.',
                    isOpen: false,
                },
            ]
        }">
            <h2 class="text-2xl font-bold">FAQs</h2>
            <div class="leading-loose text-lg mt-6">
                <template x-for="faq in faqs" :key="faq.question">
                    <div>
                        <button
                            class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4"
                            @click="faq.isOpen = !faq.isOpen"
                        >
                            <div x-text="faq.question"></div>
                            <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/></svg>
                            <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/></svg>
                        </button>
                        
                        <div
                            class="text-gray-700 text-sm mt-2"
                            x-text="faq.answer"
                            x-show="faq.isOpen"
                        ></div>
                    </div>
                </template>
            </div>
        </div>
        <div 
            class="container mx-auto p-4 mb-4"
            x-data="{ quote:'' }"
            x-init="
                fetch('https://api.kanye.rest')
                    .then(response => response.json())
                    .then(data => quote = data.quote)
            "
        >
            <div class="flex items-center text-center justify-center h-screen text-2xl italic" x-text="`&quot;${quote}&quot;`"></div>
        </div>
        <div class="container mx-auto p-4 mb-4" x-data="todos()">
            <div class="bg-white shadow-md rounded px-6 py-4">
                <h2 class="text-2xl font-bold">Todo App</h2>
                
                <div class="mt-4 mb-6">
                    <input 
                        type="text" 
                        class="shadow w-full px-2 py-2" 
                        x-model="todoTitle"
                        @keydown.enter="addTodo()"
                    >
                </div>
                
                <ul class="mb-6">
                    <template x-for="todo in todos" :key="todo.id">
                        <li class="flex items-center justify-between mt-3">
                            <div class="flex items-center" :class="{ 'line-through' : todo.isComplete }">
                                <input type="checkbox" x-model="todo.isComplete">
                                <div class="ml-3" x-text="todo.title"></div>
                            </div>
                            <button class="text-xl ml-2" @click="deleteTodo(todo.id)">&times;</button>
                        </li>
                    </template>
                </ul>
            </div>
        </div>
        <script>
            function todos() {
                return {
                    todos: [
                        {
                            id: 1,
                            title: 'Finish Alpine Screencast',
                            isComplete: false,
                        },
                        {
                            id: 2,
                            title: 'Finish Alpine',
                            isComplete: false,
                        },
                        {
                            id: 3,
                            title: 'Alpine Screencast',
                            isComplete: false,
                        },
                    ],
                    todoTitle: '',
                    todoId: 2,
                    addTodo() {
                        if (this.todoTitle.trim() === '') {
                            return;
                        }
                        
                        this.todos.push({
                            id: this.todoId,
                            title: this.todoTitle,
                            isComplete: false,
                        })
                        
                        this.todoId++;
                        this.todoTitle = '';
                    },
                    deleteTodo(id) {
                        this.todos = this.todos.filter(todo => id !== todo.id);
                    }
                }
            }
        </script>
        <div x-data="{tags: ['hey'], newTag: '' }" class="container mx-auto p-4 mb-4">
            <template x-for="tag in tags">
                <input type="hidden" name="tags[]" :value="tag">
            </template>

            <div class="max-w-sm w-full mx-auto">
                <div class="tags-input">
                    <template x-for="tag in tags" :key="tag">
                        <span class="tags-input-tag">
                            <span x-text="tag"></span>
                            <button type="button" class="tags-input-remove" @click="tags = tags.filter(i => i !== tag)">
                                &times;
                            </button>
                        </span>
                    </template>

                    <input class="tags-input-text" placeholder="Add tag..."
                        @keydown.enter.prevent="if (newTag.trim() !== '') tags.push(newTag.trim()); newTag = ''"
                        @keydown.backspace="if (newTag.trim() === '') tags.pop()"
                        x-model="newTag"
                    >
                </div>
            </div>
        </div>
        <div class="container mx-auto p-4 mb-4" id="goHere">Click me.</div>
        <script>
            const thing = document.querySelector('#goHere')
            const handler1 = (e) => {
                thing.removeEventListener('click', handler1)

                const div = document.createElement('div')
                div.setAttribute('x-data', '{hey: "there"}')
                div.innerHTML = '<input type="text" x-model="hey"><h1 x-text="hey"></h1>'
                e.target.appendChild(div)
            }

            var listener = thing.addEventListener('click', handler1)
        </script>
        <div id="goHere2" class="container mx-auto p-4 mb-4">Click me.</div>
        <script>
            const thing2 = document.querySelector('#goHere2')
            const handler2 = (e) => {
                thing2.removeEventListener('click', handler2)

                e.target.innerHTML = `
                    <article>
                        <div x-data="{hey: 'there'}">
                            <input type="text" x-model="hey"><h1 x-text="hey"></h1>
                        </div>
                    </article>
                `
            }

            var listener = thing2.addEventListener('click', handler2)
        </script>
        <div class="container mx-auto p-4 mb-4" x-data="{ items: ['foo', 'bar'], foo: 'bar' }">
            <input type="checkbox" x-model="items" value="foo">
            <input type="checkbox" x-model="items" value="bar">
            <input type="checkbox" x-model="items" value="baz">

            <button @click="items = ['bar', 'bob']">hey</button>

            <template x-for="item in items" :key="item">
                <div x-text="item" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter="ease-out transition-medium"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave="ease-in transition-faster"
                    x-transition:leave-end="opacity-0 scale-90"
                ></div>
            </template>
        </div>
        <div class="container mx-auto p-4 mb-4" x-data="initialData()" x-init="init()">
            <div :style="'width: '+width+'px; background: purple;'">hey</div>

            <button class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded" x-ref="inc">increase</button>
        </div>
        <script>
            function initialData() {
                return {
                    width: 20,
                    init() {
                        this.$refs.inc.addEventListener('click', () => {
                            this.width = this.width + 20
                        })
                    }
                }
            }
        </script>
        <div class="container mx-auto p-4 mb-4" x-data="{ foo: 'bar' }" x-on:custom-event="foo = $event.detail.newValue">
            <span x-text="foo"></span>

            <button class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded" x-on:click="$dispatch('custom-event', {newValue: 'baz'})">Turn 'bar' to 'baz'</button>
        </div>
        <div x-data="{ foo: { bar: 'ddd' } }" class="container mx-auto p-4 mb-4">
            <div x-text="foo.bar"></div>
            <input type="text" x-model="foo.bar">
        </div>
        <div x-data="{ text: 'foo', checkbox: ['foo'], radio:
                            'foo', select: 'foo', 'multiselect': ['foo'] }" class="container mx-auto p-4 mb-4">
            Text:
            <span x-text="JSON.stringify(text)"></span>
            <input type="text" x-model="text">
            Checkbox:
            <span x-text="JSON.stringify(checkbox)"></span>
            <input type="checkbox" x-model="checkbox"
                value="foo">
                <input type="checkbox" x-model="checkbox"
                :value="0">
            <input type="checkbox" x-model="checkbox"
                value="bar">
            Radio:
            <span x-text="JSON.stringify(radio)"></span>
            <input type="radio" x-model="radio" value="foo">
            <input type="radio" x-model="radio" value="bar">
            Select:
            <span x-text="JSON.stringify(select)"></span>
            <select x-model="select">
                <option>foo</option>
                <option>bar</option>
            </select>
            Multiple Select:
            <span x-text="JSON.stringify(multiselect)"></span>
            <select x-model="multiselect" multiple>
                <option>foo</option>
                <option>bar</option>
            </select>
        </div>
        <div class="container mx-auto p-4 mb-4" 
            x-data="images()"
            x-init="
                fetch('https://pixabay.com/api/?key=15819227-ef2d84d1681b9442aaa9755b8&q=yellow+flowers&image_type=photo')
                .then(response => response.json())
                .then(response => { images = response.hits })
            "
            >
          <section class="hero">
            <div class="container">
              <div class="d-flex flex-column align-items-center">
                <h1 class="display-4" style="text-align:center;">
                  Search for images.
                </h1>
                <h2 class="" style="text-align:center;">
                  Pixel perfect images can be found here.
                </h2>
                <div class="input-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="search images"
                    x-model="q"
                    aria-label="Text input with segmented dropdown button"
                  />
                  <select class="custom-select" x-model="image_type">
                    <option selected>choose image type</option>
                    <option value="all">All</option>
                    <option value="photo">Photo</option>
                    <option value="illustration">Illustration</option>
                    <option value="vector">Vector</option>
                  </select>
                  <div class="input-group-append">
                    <button
                        class="bg-blue-700 text-white px-4 py-3 mt-4 text-sm rounded"
                      type="button"
                      x-on:click="getImages()"
                    >
                      Search
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <section id="photos" class="my-5">
            <template x-for="image in images" :key="image.id">
              <img x-bind:src="image.webformatURL" x-bind:alt="image.user" />
            </template>
          </section>
        </div>
        <script>
          function images() {
            return {
              images: [],
              q: "",
              image_type: "",
              getImages: async function() {
                // console.log("params", this.q, this.image_type);
                const response = await fetch(
                  `https://pixabay.com/api/?key=15819227-ef2d84d1681b9442aaa9755b8&q=${
                    this.q
                  }&image_type=${this.image_type}`
                );
                const data = await response.json();
                this.images = data.hits;
              }
            };
          }
        </script>
        
    </body>
</html>