<!DOCTYPE html>
<html>
<head>
</head>
<style>
ul.footer {
	list-style: none;
	padding-left: 0;
}

footer {
	background-color: #555;
	color: #bbb;
	line-height: 1.5;
}

footer a {
	text-decoration: none;
	color: #eee;
}

a:hover {
	text-decoration: underline;
}

.ft-title {
	color: #fff;
	font-family: ’Merriweather’, serif;
	font-size: 1.375rem;
	padding-bottom: 0.625rem;
}

.container {
	flex: 1;
}

.ft-main {
	padding: 1.25rem 1.875rem;
	display: flex;
	flex-wrap: wrap;
}

.ft-main-item {
	padding: 1.25rem;
	min-width: 12.5rem;
}

@media only screen and (min-width: 29.8125rem) {
	.ft-main {
		justify-content: space-around;
	}
}

@media only screen and (min-width: 77.5rem) {
	.ft-main {
		justify-content: space-evenly;
	}
}

.ft-social {
	padding: 0 1.875rem 1.25rem;
}

.ft-social-list {
	display: flex;
	justify-content: center;
	border-top: 1px #777 solid;
	padding-top: 1.25rem;
}

.ft-social-list li {
	margin: 0.5rem;
	font-size: 1.25rem;
}

.ft-legal {
	padding: 0.9375rem 1.875rem;
	background-color: rgb(34, 34, 34);
}

.ft-legal-list {
	width: 100%;
	display: flex;
	flex-wrap: wrap;
}

.ft-legal-list li {
	margin: 0.125rem 0.625rem;
	white-space: nowrap;
}

.ft-legal-list li:nth-last-child(2) {
	flex: 1;
}

form {
	display: flex;
	flex-wrap: wrap;
}

input[type="email"] {
	border: 0;
	padding: 0.625rem;
	margin-top: 0.3125rem;
}

input[type="submit"] {
	background-color: #000000;
	color: #fff;
	cursor: pointer;
	border: 0;
	padding: 0.625rem 0.9375rem;
	margin-top: 0.3125rem;
}
</style>



<footer>

	


	<section class="ft-legal">
		<ul class="ft-legal-list">
			<li><a
				href="https://www.lockheedmartin.com/en-us/suppliers/business-area-procurement/aeronautics/terms-and-conditions-archives/terms-and-conditions-f-35-archive.html">Terms
					&amp; Conditions</a></li>
			<li><a href="#">Privacy
					Policy</a></li>
			<li><a href="contact.php"">Contact Us</a></li>

			<li>&copy; Golan Elbaz 2021 All Rights Reserved.</li>
		</ul>
	</section>
</footer>