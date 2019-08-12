export default {
	mode: 'universal',
	/*
  ** Headers of the page
  */
	head: {
		title: process.env.npm_package_name || '',
		meta: [
			{ charset: 'utf-8' },
			{ name: 'viewport', content: 'width=device-width, initial-scale=1' },
			{ hid: 'description', name: 'description', content: process.env.npm_package_description || '' }
		],
		link: [
			{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' },
			{
				rel: 'stylesheet',
				href: 'http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'
			}
		]
	},
	/*
  ** Customize the progress-bar color
  */
	loading: { color: '#fff' },
	/*
  ** Global CSS
  */
	css: [ '~/assets/fonts/roboto.css', '~/assets/css/styles.css' ],
	/*
  ** Plugins to load before mounting the App
  */
	plugins: [],
	/*
  ** Nuxt.js dev-modules
  */
	devModules: [],
	/*
  ** Nuxt.js modules
  */
	modules: [
		// Doc: https://bootstrap-vue.js.org/docs/
		'bootstrap-vue/nuxt',
		'@nuxtjs/axios',
		'@nuxtjs/auth'
	],

	/** 
	 * axios
	*/
	axios: {
		baseURL: 'http://127.0.0.1:8000/api'
	},

	auth: {
		endpoints: {
			login: {
				url: 'login',
				method: 'post',
				propertyName: 'access_token'
			},
			user: {
				url: 'me',
				method: 'post',
				propertyName: 'data'
			},
			logout: {
				url: 'logout',
				method: 'post'
			}
		}
	},

	/*
  ** Build configuration
  */
	build: {
		/*
    ** You can extend webpack config here
    */
		extend(config, ctx) {}
	}
};
