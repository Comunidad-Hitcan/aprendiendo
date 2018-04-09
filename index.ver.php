<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>vue</title>
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>

	<div id="app">
		{{mesagge}}
	</div>

	<div id="app-2">
		<span v-bind:title="message">mueve el mause </span>
	</div>
	<br>


	<div id="app3">
		<span v-if="seen"> ahora me ves</span>
	</div>

	<br>

	<div id="app4">
		<ol>
			<li v-for="todo in todos">
				{{todo.text}}
			</li>
		</ol>
	</div>


	<div id="app5">
		<p>{{msj}}</p>
		<button v-on:click="cambiarMensaje">Revierte el mensaje amigo!</button>
	</div>

	<br>

	<p id="texto">ver una cadena separada</p>
	<button onclick="split()">Pulsa Aqui amigo</button>


	<br>

	<div id="app8">
		<p>{{message}}</p>
		<input v-model="message">
	</div>


	<br>

	<ol>
		<todo-item></todo-item>
	</ol>

	<!-- app4.todos.push({text: 'asigna un nuevo elemento' }) -->

	<script type="text/javascript">

		var app = new Vue({
			el: '#app',
			data: {
				mesagge: 'hola hellmuth'
			}
		})

		var app2 = new Vue ({
 		 el: '#app-2',
  		data: {
    	message: ' Cargaste esta página en ' + new  Date().toLocaleString()
  			}
		})

		var app3 = new Vue({
			el: '#app3',
			data:{
				seen: true
			}
		});

		var app4 = new Vue({
			el:'#app4',
			data:{
				todos:[
				{text: 'aprende javascript'},
				{text:'aprende vue'},
				{text:'construye estupendas aplicaciones.'}

				]
			}
		});


		var app5 = new Vue({
			el:'#app5',
			data:{
				msj: 'hola amigo hellmuth'
			},
			methods:{
				cambiarMensaje: function(){
					this.msj = this.msj.split('').reverse().join('')
				}
			}
		});




		function split(){
			var app6="ejemplo";
			var app7 = app6.split('').reverse().join('');
			document.getElementById("texto").innerHTML = app7;
		}

		var app8 = new Vue ({
			el:'#app8',
			data: {
				message: 'hellmuth hola vue'
			}
		});


		Vue.component ('todo-item', {
			prop: ['todo'],
			template: '<li>{{todo.text}}</li>'
		});

	</script>
</body>
</html>
