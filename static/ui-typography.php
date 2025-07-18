<!DOCTYPE html>
<html lang="en">

<head>
	<!--  head-->
	<?php include '../include/importhead.php'; ?>

	<!--  CSS-->
	<?php include '../include/importcss.php'; ?>

	<title>Typography | AdminKit Demo</title>
</head>

<body>
	<div class="wrapper">
		<!--  side baar-->
		<?php include '../include/importsidebar.php'; ?>

		<div class="main">
			<!--  Nav baar-->
			<?php include '../include/importnavbar.php'; ?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Typography</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
							Get more typography examples
						</a>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Headings</h5>
									<h6 class="card-subtitle text-muted">All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</h6>
								</div>
								<div class="card-body">
									<h1>This is a heading h1</h1>
									<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
										vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero.</p>
									<h2>This is a heading h2</h2>
									<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit
										vel, luctus pulvinar, hendrerit id, lorem.</p>
									<h3>This is a heading h3</h3>
									<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, vel.</p>
									<h4>This is a heading h4</h4>
									<p class="text-muted">Etiam rhoncus. Maecenas tempus, tellus condimentum rhoncus, sem quam libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, vel.</p>
									<h5>This is a heading h5</h5>
									<p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
									<h6>This is a heading h6</h6>
									<p class="text-muted">Sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel.</p>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Coloured text</h5>
									<h6 class="card-subtitle text-muted">Contextual text classes.</h6>
								</div>
								<div class="card-body">
									<p class="text-primary">This line of text contains the text-primary class.</p>
									<p class="text-secondary">This line of text contains the text-secondary class.</p>
									<p class="text-success">This line of text contains the text-success class.</p>
									<p class="text-danger">This line of text contains the text-danger class.</p>
									<p class="text-warning">This line of text contains the text-warning class.</p>
									<p class="text-info">This line of text contains the text-info class.</p>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Inline text</h5>
									<h6 class="card-subtitle text-muted">Styling for common inline HTML5 elements.</h6>
								</div>
								<div class="card-body">
									<p>You can use the mark-tag to <mark>highlight</mark> text.</p>
									<p><del>This line of text can be treated as deleted text.</del></p>
									<p><ins>This line of text can be treated as an addition to the document.</ins></p>
									<p><strong>Bold text using the strong-tag</strong></p>
									<p><em>Italicized text using the em-tag</em></p>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Blockquotes</h5>
									<h6 class="card-subtitle text-muted">For quoting blocks of content from another source within your document.</h6>
								</div>
								<div class="card-body">
									<blockquote>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
										</p>
										<footer>
											Someone famous in <cite title="Source Title">Source Title</cite>
										</footer>
									</blockquote>
									<p class="text-muted m-b-15 m-t-20">
										Add <code>.blockquote-reverse</code> for a blockquote with right-aligned content.
									</p>
									<blockquote class="blockquote-reverse m-b-0">
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
										</p>
										<footer>
											Someone famous in <cite title="Source Title">Source Title</cite>
										</footer>
									</blockquote>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">List unordered</h5>
									<h6 class="card-subtitle text-muted">The unordered list items will are marked with bullets.</h6>
								</div>
								<div class="card-body">
									<ul>
										<li>
											Lorem ipsum dolor sit amet
										</li>
										<li>
											Consectetur adipiscing elit
										</li>
										<li>
											Nulla volutpat aliquam velit
										</li>
										<li>
											Phasellus iaculis neque
										</li>
										<li>
											Eget porttitor lorem
										</li>
									</ul>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">List ordered</h5>
									<h6 class="card-subtitle text-muted">The ordered list items will are marked with numbers.</h6>
								</div>
								<div class="card-body">
									<ol>
										<li>
											Lorem ipsum dolor sit amet
										</li>
										<li>
											Consectetur adipiscing elit
										</li>
										<li>
											Nulla volutpat aliquam velit
										</li>
										<li>
											Phasellus iaculis neque
										</li>
										<li>
											Eget porttitor lorem
										</li>
									</ol>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

			<!--  Footer -->
			<?php include '../include/importfooter.php';
			?>
		</div>
	</div>

	<script src="js/app.js"></script>

</body>

</html>