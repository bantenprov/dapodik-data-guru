# dapodik-data-guru
Statistik rekapitulasi dapodik data guru tingkat provinsi

[![Join the chat at https://gitter.im/dapodik-data-guru/Lobby](https://badges.gitter.im/dapodik-data-guru/Lobby.svg)](https://gitter.im/dapodik-data-guru/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-guru/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-guru/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-guru/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/dapodik-data-guru/build-status/master)
 

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/dapodik-data-guru:dev-master
```
- Latest release:

## download via github
```bash
$ git clone https://github.com/bantenprov/dapodik-data-guru.git
```
#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\DDGuru\DDGuruServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=dd-guru-assets
$ php artisan vendor:publish --tag=dd-guru-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/dd-guru',
    components: {
        main: resolve => require(['./components/views/bantenprov/dd-guru/DashboardDDGuru.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
        title: "DD Guru"
    }
	}
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
			path: '/admin/dashboard/dd-guru',
			components: {
				main: resolve => require(['./components/bantenprov/dd-guru/DDGuruAdmin.show.vue'], resolve),
				navbar: resolve => require(['./components/Navbar.vue'], resolve),
				sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
			},
			meta: {
				title: "DD Guru"
			}
		}
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Angka partisipasi kasar',
          link: '/dashboard/ap-kasar',
          icon: 'fa fa-angle-double-right'
        }
  ]
},
//== ...        
      {
        name: 'Dapodik Data Guru',
        link: '/dashboard/dd-guru',
        icon: 'fa fa-angle-double-right'
      },
```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

//== DD guru

import DDGuru from './components/bantenprov/dd-guru/DDGuru.chart.vue';
Vue.component('echarts-dd-guru', DDGuru);

import DDGuruKota from './components/bantenprov/dd-guru/DDGuruKota.chart.vue';
Vue.component('echarts-dd-guru-kota', DDGuruKota);

import DDGuruTahun from './components/bantenprov/dd-guru/DDGuruTahun.chart.vue';
Vue.component('echarts-dd-guru-tahun', DDGuruTahun);

import DDGuruAdminShow from './components/bantenprov/dd-guru/DDGuruAdmin.show.vue';
Vue.component('admin-view-dd-guru-tahun', DDGuruAdminShow);

//== Echarts DD Guru

import DDGuruBar01 from './components/views/bantenprov/dd-guru/DDGuruBar01.vue';
Vue.component('dd-guru-bar-01', DDGuruBar01);

import DDGuruBar02 from './components/views/bantenprov/dd-guru/DDGuruBar02.vue';
Vue.component('dd-guru-bar-02', DDGuruBar02);

//== mini bar charts
import DDGuruBar03 from './components/views/bantenprov/dd-guru/DDGuruBar03.vue';
Vue.component('dd-guru-bar-03', DDGuruBar03);

import DDGuruPie01 from './components/views/bantenprov/dd-guru/DDGuruPie01.vue';
Vue.component('dd-guru-pie-01', DDGuruPie01);

import DDGuruPie02 from './components/views/bantenprov/dd-guru/DDGuruPie02.vue';
Vue.component('dd-guru-pie-02', DDGuruPie02);

//== mini pie charts
import DDGuruPie03 from './components/views/bantenprov/dd-guru/DDGuruPie03.vue';
Vue.component('dd-guru-pie-03', DDGuruPie03);
```



