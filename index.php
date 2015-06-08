<?php include('includes/header.php'); ?>

<div id="site-content" class="site-content">

	<article class="container" role="main">

		<h1 class="h1">Heading 1</h1>
		<h2 class="h2">Heading 2</h2>
		<h3 class="h3">Heading 3</h3>
		<h4 class="h4">Heading 4</h4>
		<h5 class="h5">Heading 5</h5>
		<h6 class="h6">Heading 6</h6>

		<hr>

		<div class="copy">

			<h1>Heading 1</h1>

			<p>Nobis, accusamus, velit, laudantium illum minima a <a href="">perferendis ducimus</a> ratione aliquid tempore ea magnam unde voluptatem saepe impedit itaque corrupti officia reiciendis?</p>

			<p>
				<img src="//placehold.it/1200x400" alt="">
			</p>

			<p>Nobis, accusamus, velit, laudantium illum minima a <a href="">perferendis ducimus</a> ratione aliquid tempore ea magnam unde voluptatem saepe impedit itaque corrupti officia reiciendis?</p>

			<h2>Heading 2</h2>

			<p>Nobis, accusamus, velit, <a href="">laudantium</a> illum minima a perferendis ducimus ratione aliquid tempore ea magnam unde voluptatem saepe impedit itaque corrupti officia reiciendis?</p>

			<h3>Heading 3</h3>

			<p>Nobis, accusamus, velit, laudantium illum minima a perferendis ducimus ratione aliquid tempore ea magnam unde voluptatem saepe impedit itaque <a href="">corrupti officia</a> reiciendis?</p>

			<ul>
				<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
				<li>Culpa, perspiciatis, consectetur architecto debitis reprehenderit.</li>
				<li>Ratione fugit placeat eius impedit velit soluta eveniet quaerat!</li>
				<li>Incidunt, eaque optio fugit iusto atque necessitatibus unde debitis.</li>
				<li>Cum, dignissimos ad vel tempore quam quod delectus eaque quaerat!</li>
			</ul>

		</div>

		<hr>

		<form>
			<fieldset class="form-fields">
				<div>
					<label for="text">Text</label>
					<input type="text" name="text" id="text">
				</div>
				<div>
					<label for="text-value">Text (with value)</label>
					<input type="text" name="text-value" id="text-value" value="A test value">
				</div>
				<div>
					<label for="text-required">Text (required)</label>
					<input type="text" name="text-required" id="text-required" required>
				</div>
				<div>
					<label for="text-placeholder">Text (with placeholder)</label>
					<input type="text" name="text-placeholder" id="text-placeholder" placeholder="A placeholder value">
				</div>
				<div>
					<label for="text-placeholder">Two inputs</label>
					<ul class="form-fields__list">
						<li>
							<input type="text" name="text-group-1" id="text-group-1" placeholder="A placeholder value">
						</li>
						<li>
							<input type="text" name="text-group-2" id="text-group-2" placeholder="A placeholder value">
						</li>
					</ul>
				</div>
				<div>
					<label for="text-disabled">Text (disabled)</label>
					<input type="text" name="text-disabled" id="text-disabled" disabled>
				</div>
				<div>
					<label for="text-disabled">Text (failed validation)</label>
					<input type="text" name="text-disabled" id="text-disabled" class="required error" required>
					<span class="error">Name Required</span>
				</div>
				<div>
					<label for="text-disabled">Text (passed validation)</label>
					<input type="text" name="text-disabled" id="text-disabled" class="required success" required>
				</div>
				<div>
					<label for="email">Email</label>
					<input type="email" name="email" id="email">
				</div>
				<div>
					<label for="date">Date</label>
					<input type="date" name="date" id="date">
				</div>
				<div>
					<label for="search">Search</label>
					<input type="search" name="search" id="search">
				</div>
				<div>
					<label for="telephone">Telephone</label>
					<input type="tel" name="telephone" id="telephone">
				</div>
				<div>
					<label for="textarea">Textarea</label>
					<textarea name="textarea" id="textarea" rows="10"></textarea>
				</div>
				<div>
					<label for="select">Select (for plugin version - need to enable in main.js)</label>
					<select name="select" id="select">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
						<option>Option 6</option>
						<option>Option 7</option>
						<option>Option 8</option>
						<option>Option 9</option>
						<option>Option 10</option>
						<option>Option 11</option>
						<option>Option 12</option>
						<option>Option 13</option>
						<option>Option 14</option>
						<optgroup label="Optgroup">
							<option>Option A</option>
							<option>Option B</option>
						</optgroup>
					</select>
				</div>
				<div>
					<label for="select">Select (multiple)</label>
					<select name="select" id="select" multiple="multiple" size="5">
						<option>Option 1</option>
						<option>Option 2</option>
						<option>Option 3</option>
						<option>Option 4</option>
						<option>Option 5</option>
						<option>Option 6</option>
						<option>Option 7</option>
						<option>Option 8</option>
						<option>Option 9</option>
						<option>Option 10</option>
					</select>
				</div>
				<div>
					<span class="label">Checkbox List</span>
					<ul class="form-fields__list-inline">
						<li>
							<input id="checkbox-1" type="checkbox" checked>
							<label for="checkbox-1">Option 1</label>
						</li>
						<li>
							<input id="checkbox-2" type="checkbox">
							<label for="checkbox-2">Option 2</label>
						</li>
						<li>
							<input id="checkbox-3" type="checkbox">
							<label for="checkbox-3">Option 3</label>
						</li>
						<li>
							<input id="checkbox-4" type="checkbox" disabled>
							<label for="checkbox-4">Option Disabled</label>
						</li>
					</ul>
				</div>
				<div>
					<span class="label">Checkbox List</span>
					<ul class="form-fields__list-inline">
						<li>
							<input id="checkbox-1b" type="checkbox" checked>
							<label for="checkbox-1b">Option 1</label>
						</li>
						<li>
							<input id="checkbox-2b" type="checkbox">
							<label for="checkbox-2b">Option 2</label>
						</li>
						<li>
							<input id="checkbox-3b" type="checkbox">
							<label for="checkbox-3b">Option 3</label>
						</li>
						<li>
							<input id="checkbox-4b" type="checkbox" disabled>
							<label for="checkbox-4b">Option Disabled</label>
						</li>
					</ul>
				</div>
				<div>
					<span class="label">Radio List</span>
					<ul class="form-fields__list">
						<li>
							<input id="radio-1" name="radio" type="radio" checked>
							<label for="radio-1">Option 1</label>
						</li>
						<li>
							<input id="radio-2" name="radio" type="radio">
							<label for="radio-2">Option 2</label>
						</li>
						<li>
							<input id="radio-3" name="radio" type="radio">
							<label for="radio-3">Option 3</label>
						</li>
						<li>
							<input id="radio-4" name="radio" type="radio" disabled>
							<label for="radio-4">Option Disabled</label>
						</li>
					</ul>
				</div>
				<div>
					<button type="submit">Button: Primary</button>
				</div>
				<div>
					<button class="button--secondary" type="submit">Button: Secondary</button>
				</div>
				<div>
					<button class="button--positive" type="submit">Button: Positive</button>
				</div>
				<div>
					<button class="button--negative" type="submit">Button: Negative</button>
				</div>
				<div>
					<button type="submit" disabled>Button: Disabled</button>
				</div>
			</fieldset>
		</form>

		<hr>

		<div class="grid">
			<div class="row" style="margin-top: 1rem;">
				<div class="column base-12">Vel ab illo iure ipsum labore modi adipisci, obcaecati dolorem ullam eveniet dicta quam minus aut deserunt earum delectus similique, dolor neque.</div>
				<div class="column base-12">Quisquam sequi fugit numquam id inventore, excepturi! Culpa, voluptatibus sit natus delectus non debitis eligendi, aperiam sint quis unde vitae consequatur reiciendis.</div>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<div class="column base-8 phone-wide-12">Ex eveniet possimus in ratione asperiores impedit sed quo ipsam odit, reprehenderit amet sapiente commodi itaque, facere at veniam! Natus, quos, voluptatum!</div>
				<div class="column base-8 phone-wide-6">Nobis hic excepturi adipisci minus quibusdam modi. Sequi quidem recusandae minima tenetur nam cumque similique, veritatis numquam voluptatem, velit quas ex est!</div>
				<div class="column base-8 phone-wide-6">Praesentium impedit ipsa eius, quibusdam architecto aperiam nulla totam saepe necessitatibus, optio nam illo aliquam. Perferendis vitae, nobis sapiente sint qui minus.</div>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<div class="column base-6 phone-wide-16 tablet-8">Iste nesciunt ipsa saepe tenetur ad recusandae eius debitis rerum ex voluptas numquam officia quam, vel cumque ipsam magni, molestias vero animi.</div>
				<div class="column base-9 phone-wide--hidden tablet-8 tablet--visible">Voluptatibus distinctio assumenda quas consectetur veniam id cupiditate, ullam quo deleniti harum optio debitis expedita eius error cum alias quidem eaque cumque!</div>
				<div class="column base-9 phone-wide-8 tablet-8">A fugiat, explicabo quidem vero consequatur incidunt corporis quod obcaecati tempora eligendi distinctio adipisci tempore, numquam libero, nobis est quibusdam pariatur at.</div>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<div class="column base-12">
					<div class="row">
						<div class="column base-12">Nested: Culpa nesciunt sequi cupiditate laboriosam delectus autem consectetur quis perspiciatis, earum animi quam ducimus harum repellendus sapiente eum facilis corporis, quod labore.</div>
						<div class="column base-12">Neque a, et accusantium tempora nulla sequi error id nobis qui. Omnis rerum voluptate quo sed, mollitia accusantium exercitationem dicta reprehenderit incidunt.</div>
					</div>
				</div>
				<div class="column base-12">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi atque necessitatibus, enim molestiae adipisci odio facilis, facere consequuntur error praesentium perferendis, vero, obcaecati architecto animi sint ullam totam voluptas et.</div>
			</div>
		</div>

		<hr>

		<div class="base-block-grid-12">
			<div>Suscipit beatae, doloribus aspernatur obcaecati ducimus ea cum, sed temporibus hic velit! Maxime assumenda hic blanditiis, laudantium amet eos nobis sint harum.</div>
			<div>Ea, hic libero! Beatae quisquam explicabo magni atque. Dolore libero repudiandae amet, quis optio blanditiis. Autem nesciunt eos harum ea, earum. Non!</div>
		</div>

		<div class="base-block-grid-8" style="margin-top: 1rem;">
			<div>Dolore reiciendis laudantium ducimus, fuga optio ipsam quod nam est dolorum perspiciatis odit consectetur velit commodi modi, a ad, fugiat nisi aliquam?</div>
			<div>Impedit voluptatum unde expedita molestiae blanditiis consequatur quos maxime fuga! Esse accusantium sapiente sit. Corrupti, ratione repellendus tempora cumque. Dolore, nobis, voluptas!</div>
			<div>Sequi beatae quidem adipisci, earum labore, quaerat neque, distinctio suscipit porro similique rerum, accusantium explicabo vel velit nulla eos molestiae dicta? Commodi.</div>
		</div>

	</article>

</div>

<?php include('includes/footer.php'); ?>