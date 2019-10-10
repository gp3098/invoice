<template>
    <div id="root">
        <nav class="navbar navbar-expand-lg bg-light">
            <a class="navbar-brand" href="#">Brand Name</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <router-link class="nav-link" to="/">Customer</router-link>
                       
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link" to="/invoice" >Invoice</router-link>
                    </li>
                     
                </ul>
            </div>
        </nav>

        <router-view></router-view>
    </div>
</template>
