/*
Template Name: Lexa - Admin & Dashboard Template
Author: Themesdesig
Website: https://Themesdesig.com/
Contact: Themesdesig@gmail.com
File: Session Timeout
*/

$.sessionTimeout({
	keepAliveUrl: 'pages-starter.html',
	logoutButton:'Logout',
	logoutUrl: 'pages-login.html',
	redirUrl: 'pages-lock-screen.html',
	warnAfter: 3000,
	redirAfter: 30000,
	countdownMessage: 'Redirecting in {timer} seconds.'
});