@extends('layouts.default')
@section('content')
    Home
@stop

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elegant Dashboard | Media Library-01</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/svg/logo.svg" type="image/x-icon">
    <!-- Dropzone CSS -->
    <link rel="stylesheet" href="./plugins/dropzone/dropzone.css">
    <!-- Quill stylesheet -->
    <link href="./plugins/quill.snow.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="./css/style.min.css">
</head>

<body>
<div class="layer"></div>
<!-- ! Body -->
<a class="skip-link sr-only" href="#skip-target">Skip to content</a>
<div class="page-flex">
    <!-- ! Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-start">
            <div class="sidebar-head">
                <a href="/" class="logo-wrapper" title="Home">
                    <span class="sr-only">Home</span>
                    <span class="icon logo" aria-hidden="true"></span>
                    <div class="logo-text">
                        <span class="logo-title">Elegant</span>
                        <span class="logo-subtitle">Dashboard</span>
                    </div>

                </a>
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle" aria-hidden="true"></span>
                </button>
            </div>
            <div class="sidebar-body">
                <ul class="sidebar-body-menu">
                    <li>
                        <a class="active" href="/"><span class="icon home" aria-hidden="true"></span>Dashboard</a>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon document" aria-hidden="true"></span>Posts
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="posts.html">All Posts</a>
                            </li>
                            <li>
                                <a href="new-post.html">Add new post</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon folder" aria-hidden="true"></span>Categories
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="categories.html">All categories</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon image" aria-hidden="true"></span>Media
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="media-01.html">Media-01</a>
                            </li>
                            <li>
                                <a href="media-02.html">Media-02</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon paper" aria-hidden="true"></span>Pages
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="pages.html">All pages</a>
                            </li>
                            <li>
                                <a href="new-page.html">Add new page</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="comments.html">
                            <span class="icon message" aria-hidden="true"></span>
                            Comments
                        </a>
                        <span class="msg-counter">7</span>
                    </li>
                </ul>
                <span class="system-menu__title">system</span>
                <ul class="sidebar-body-menu">
                    <li>
                        <a href="appearance.html"><span class="icon edit" aria-hidden="true"></span>Appearance</a>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon category" aria-hidden="true"></span>Extentions
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="extention-01.html">Extentions-01</a>
                            </li>
                            <li>
                                <a href="extention-02.html">Extentions-02</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="show-cat-btn" href="##">
                            <span class="icon user-3" aria-hidden="true"></span>Users
                            <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                        </a>
                        <ul class="cat-sub-menu">
                            <li>
                                <a href="users-01.html">Users-01</a>
                            </li>
                            <li>
                                <a href="users-02.html">Users-02</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="##"><span class="icon setting" aria-hidden="true"></span>Settings</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="sidebar-footer">
            <a href="##" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture><source srcset="./img/avatar/avatar-illustrated-01.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-01.png" alt="User name"></picture>
            </span>
                <div class="sidebar-user-info">
                    <span class="sidebar-user__title">Nafisa Sh.</span>
                    <span class="sidebar-user__subtitle">Support manager</span>
                </div>
            </a>
        </div>
    </aside>
    <div class="main-wrapper">
        <!-- ! Main nav -->
        <nav class="main-nav--bg">
            <div class="container main-nav">
                <div class="main-nav-start">
                    <div class="search-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="text" placeholder="Enter keywords ..." required="">
                    </div>
                </div>
                <div class="main-nav-end">
                    <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                        <span class="sr-only">Toggle menu</span>
                        <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                    </button>
                    <div class="lang-switcher-wrapper">
                        <button class="lang-switcher transparent-btn" type="button">
                            EN
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down" aria-hidden="true"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </button>
                        <ul class="lang-menu dropdown">
                            <li><a href="##">English</a></li>
                            <li><a href="##">French</a></li>
                            <li><a href="##">Uzbek</a></li>
                        </ul>
                    </div>
                    <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                        <span class="sr-only">Switch theme</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun sun-icon" aria-hidden="true"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon moon-icon" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>
                    </button>
                    <div class="notification-wrapper">
                        <button class="gray-circle-btn dropdown-btn" title="To messages" type="button">
                            <span class="sr-only">To messages</span>
                            <span class="icon notification active" aria-hidden="true"></span>
                        </button>
                        <ul class="users-item-dropdown notification-dropdown dropdown">
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">System just updated</span>
                                        <span class="notification-dropdown__subtitle">The system has been successfully upgraded. Read more
                  here.</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-info" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">The cache is full!</span>
                                        <span class="notification-dropdown__subtitle">Unnecessary caches take up a lot of memory space and
                  interfere ...</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="##">
                                    <div class="notification-dropdown-icon info">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check" aria-hidden="true"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </div>
                                    <div class="notification-dropdown-text">
                                        <span class="notification-dropdown__title">New Subscriber here!</span>
                                        <span class="notification-dropdown__subtitle">A new subscriber has subscribed.</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="link-to-page" href="##">Go to Notifications page</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-user-wrapper">
                        <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                            <span class="sr-only">My profile</span>
                            <span class="nav-user-img">
            <picture><source srcset="./img/avatar/avatar-illustrated-02.webp" type="image/webp"><img src="./img/avatar/avatar-illustrated-02.png" alt="User name"></picture>
          </span>
                        </button>
                        <ul class="users-item-dropdown nav-user-dropdown dropdown">
                            <li><a href="##">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user" aria-hidden="true"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span>Profile</span>
                                </a></li>
                            <li><a href="##">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings" aria-hidden="true"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                                    <span>Account settings</span>
                                </a></li>
                            <li><a class="danger" href="##">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out" aria-hidden="true"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span>Log out</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ! Main -->
        <main class="main" id="skip-target">
            <div class="container">
                <h2 class="main-title">Media Library</h2>
                <div class="media-content">
                    <div class="row">
                        <div class="col-lg-3">
                            <h3 class="media-sidebar__title">Quick links</h3>
                            <div class="media-sidebar">
                                <ul class="quick-links">
                                    <li>
                                        <a class="info" href="##">
                                            <div class="quick-links-icon">
                                                <span class="icon time-circle" aria-hidden="true"></span>
                                            </div>
                                            <div class="quick-links-text">
                                                <span class="quick-links__title">Recent files</span>
                                                <span class="quick-links__subtitle">Recent uploaded files</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="success" href="##">
                                            <div class="quick-links-icon">
                                                <span class="icon google-drive" aria-hidden="true"></span>
                                            </div>
                                            <div class="quick-links-text">
                                                <span class="quick-links__title">Google Drive</span>
                                                <span class="quick-links__subtitle">Media files from Google</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="primary" href="##">
                                            <div class="quick-links-icon">
                                                <span class="icon dropbox" aria-hidden="true"></span>
                                            </div>
                                            <div class="quick-links-text">
                                                <span class="quick-links__title">Dropbox</span>
                                                <span class="quick-links__subtitle">Media files from Dropbox</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="warning" href="##">
                                            <div class="quick-links-icon">
                                                <span class="icon star" aria-hidden="true"></span>
                                            </div>
                                            <div class="quick-links-text">
                                                <span class="quick-links__title">Starred files</span>
                                                <span class="quick-links__subtitle">Recent uploaded files</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="danger" href="##">
                                            <div class="quick-links-icon">
                                                <span class="icon delete" aria-hidden="true"></span>
                                            </div>
                                            <div class="quick-links-text">
                                                <span class="quick-links__title">Trashed files</span>
                                                <span class="quick-links__subtitle">Recent uploaded files</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="storage">
                                    <span class="storage__indicator">Free</span>
                                    <h4 class="storage__title">Storage</h4>
                                    <div class="progress">
                                        <div class="progress-bar fill-25" role="progressbar"></div>
                                    </div>
                                    <p class="storage__info">4.06 GB (32%) of 15 GB used</p>
                                </div>
                                <div class="upgrade">
                                    <p>Upgrade to <b>PRO</b> for get unlimited storage.</p>
                                    <a class="upgrade-btn" href="##">Upgrade now <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="sort-bar media-bar">
                                <div class="sort-bar-start">
                                    <div class="search-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search" aria-hidden="true"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        <input type="text" placeholder="Search" required="">
                                    </div>
                                </div>
                                <div class="sort-bar-end">
                                    <div class="select-wrapper me-10">
                                        <button class="view-sort-btn transparent-btn" type="button" title="Grid view">
                                            <span class="sr-only">Grid view</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid" aria-hidden="true"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                        </button>
                                    </div>
                                    <div class="select-wrapper">
                                        <button class="view-sort-btn transparent-btn" type="button" title="List view">
                                            <span class="sr-only">List view</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list" aria-hidden="true"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="users-table table-wrapper">
                                <table class="library-table">
                                    <thead>
                                    <tr class="users-table-info">
                                        <th>
                                            <label class="users-table__checkbox ms-20">
                                                <input type="checkbox" class="check-all">ID
                                            </label>
                                        </th>
                                        <th>Name</th>
                                        <th>Last modified</th>
                                        <th>Uploaded date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder" aria-hidden="true"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                          </span>
                                                Documents
                                            </div>
                                        </td>
                                        <td>3 days ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder" aria-hidden="true"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                          </span>
                                                Documents
                                            </div>
                                        </td>
                                        <td>10 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder" aria-hidden="true"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                          </span>
                                                Presentations
                                            </div>
                                        </td>
                                        <td>2 hours ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="purple">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                          </span>
                                                IMG_7487.png
                                            </div>
                                        </td>
                                        <td>2 minutes ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-film" aria-hidden="true"><rect x="2" y="2" width="20" height="20" rx="2.18" ry="2.18"></rect><line x1="7" y1="2" x2="7" y2="22"></line><line x1="17" y1="2" x2="17" y2="22"></line><line x1="2" y1="12" x2="22" y2="12"></line><line x1="2" y1="7" x2="7" y2="7"></line><line x1="2" y1="17" x2="7" y2="17"></line><line x1="17" y1="17" x2="22" y2="17"></line><line x1="17" y1="7" x2="22" y2="7"></line></svg>
                          </span>
                                                Wildlife.mp4
                                            </div>
                                        </td>
                                        <td>12 hours ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="purple">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                          </span>
                                                IMG_1487.png
                                            </div>
                                        </td>
                                        <td>3 days ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="warning">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-music" aria-hidden="true"><path d="M9 18V5l12-2v13"></path><circle cx="6" cy="18" r="3"></circle><circle cx="18" cy="16" r="3"></circle></svg>
                          </span>
                                                14-Podcast
                                            </div>
                                        </td>
                                        <td>12 hours ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="users-table__checkbox">
                                                <input type="checkbox" class="check">
                                                #5162
                                            </label>
                                        </td>
                                        <td>
                                            <div class="library-table-name">
                          <span class="success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file" aria-hidden="true"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                          </span>
                                                Subscribers
                                            </div>
                                        </td>
                                        <td>12 hours ago</td>
                                        <td>14 April 2021</td>
                                        <td>
                        <span class="p-relative">
                          <button class="dropdown-btn transparent-btn" type="button" title="More info">
                            <div class="sr-only">More info</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal" aria-hidden="true"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                          </button>
                          <ul class="users-item-dropdown dropdown">
                            <li><a href="##">Edit</a></li>
                            <li><a href="##">Quick edit</a></li>
                            <li><a href="##">Trash</a></li>
                          </ul>
                        </span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="library-table-sum">
                                <p><span class="checked-sum">0</span> Item selected</p>
                                <button class="media-table-btn" type="button">Assign to folder</button>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="media-dropzone">
                                <h3 class="media-dropzone__title media-sidebar__title">Import new files</h3>
                                <p class="media-dropzone__subtitle">Just drag and drop the files and assign to right folder.</p>
                                <div class="dropzone-wrapper dz-clickable" id="dropzone">
                                    <div class="dropzone-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud" aria-hidden="true"><polyline points="16 16 12 12 8 16"></polyline><line x1="12" y1="12" x2="12" y2="21"></line><path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path><polyline points="16 16 12 12 8 16"></polyline></svg>
                                        <p class="dropzone-hint">Drop files to upload or</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ! Footer -->
        <footer class="footer">
            <div class="container footer--flex">
                <div class="footer-start">
                    <p>2021 © Elegant Dashboard - <a href="elegant-dashboard.com" target="_blank" rel="noopener noreferrer">elegant-dashboard.com</a></p>
                </div>
                <ul class="footer-end">
                    <li><a href="##">About</a></li>
                    <li><a href="##">Support</a></li>
                    <li><a href="##">Puchase</a></li>
                </ul>
            </div>
        </footer>
    </div>
</div>
<!-- Chart library -->
<script src="./plugins/chart.min.js"></script>
<!-- Dropzone JS -->
<script src="plugins/dropzone/dropzone.js"></script>
<!-- Icons library -->
<script src="plugins/feather.min.js"></script>
<!-- Quill library -->
<script src="./plugins/quill.js"></script>
<!-- Custom scripts -->
<script src="js/script.js"></script>


<input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"></body>
</html>
