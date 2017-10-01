<!--
1: change color of sidebar's background using: data-background-color="white | black"
2: change color of active button using: data-active-color="primary | info | success | warning | danger"
-->
<div class="sidebar" data-background-color="black" data-active-color="info">

	<div class="sidebar-wrapper">
		<div class="logo">
			<a href="/" class="simple-text">
				Le Forme
			</a>
		</div>

		<div class="nav-user logo">
			<div class="photo pull-left" style="width:30px;height:30px;margin:0 14px 0px 6px;">
				<img class="img-responsive" style="border-radius:50%;" src="/img/faces/face-2.jpg">
			</div>
			
			<a data-toggle="collapse" href="#collapseExample" class="collapsed">
				<span style="opacity: 1;line-height: 34px;display: block;position: relative;">
					Chet Faker
					<b class="caret"></b>
				</span>
			</a>

			<div class="clearfix"></div>

			<div class="collapse" id="collapseExample">
				<ul class="user-nav">
					<li>
						<a href="/admin/users/1">
							<span class="sidebar-normal">View Profile</span>
						</a>
					</li>
					<li>
						<a href="/admin/users/1">
							<span class="sidebar-normal">Edit Profile</span>
						</a>
					</li>
					<li>
						<a href="/">
							<span class="sidebar-normal">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<ul class="nav">
			<li class="{{ Request::is('/') ? 'active' : '' }}">
				<a href="/">
					<i class="ti-bar-chart"></i>
					<p>Dashboard</p>
				</a>
			</li>

			<li>
				<a data-toggle="collapse" href="#nav-theLab" class="mb-0 {{ Request::is('lab') ? 'active' : '' }}" aria-expanded="false">
					<i class="ti-wand"></i>
					<p>The Lab <b class="caret"></b> </p>
				</a>
				<div class="collapse" id="nav-theLab" aria-expanded="false" style="">
					<ul class="nav lf-side-nav m-0 mb-20">
						<li>
							<a href="/lab/flavors" class="">
								<span class="sidebar-normal">Flavors</span>
							</a>
						</li>
						<li>
							<a href="/lab/labels" class="">
								<span class="sidebar-normal">Labels</span>
							</a>
						</li>
						<li>
							<a href="/lab/supplies" class="">
								<span class="sidebar-normal">Supplies</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li>
				<a data-toggle="collapse" href="#nav-vavaVape" class="mb-0 {{ Request::is('lab') ? 'active' : '' }}" aria-expanded="false">
					<i class="ti-cloud"></i>
					<p>VaVaVape <b class="caret"></b> </p>
				</a>
				<div class="collapse" id="nav-vavaVape" aria-expanded="false" style="">
					<ul class="nav lf-side-nav m-0 mb-20">
						<li>
							<a href="/vava/juices" class="">
								<span class="sidebar-normal">Juices</span>
							</a>
						</li>
						<li>
							<a href="/vava/products" class="">
								<span class="sidebar-normal">Products</span>
							</a>
						</li>
						<li>
							<a href="/vava/supplies" class="">
								<span class="sidebar-normal">Supplies</span>
							</a>
						</li>
					</ul>
				</div>
			</li>

			<li>
				<a data-toggle="collapse" href="#nav-purpleHaze" class="mb-0 {{ Request::is('lab') ? 'active' : '' }}" aria-expanded="false">
					<i class="ti-star"></i>
					<p>Purple Haze <b class="caret"></b> </p>
				</a>
				<div class="collapse" id="nav-purpleHaze" aria-expanded="false" style="">
					<ul class="nav lf-side-nav m-0 mb-20">
						<li>
							<a href="/purple/juices" class="">
								<span class="sidebar-normal">Juices</span>
							</a>
						</li>
						<li>
							<a href="/purple/products" class="">
								<span class="sidebar-normal">Products</span>
							</a>
						</li>
						<li>
							<a href="/purple/supplies" class="">
								<span class="sidebar-normal">Supplies</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
			<li class="mb-20 {{ Request::is('orders') ? 'active' : '' }}">
				<a href="/orders">
					<i class="ti-clipboard"></i>
					<p>Orders</p>
				</a>
			</li>
			<hr class="lf-side-nav-hr" />
			<li>
				<a data-toggle="collapse" href="#nav-admin" class="mb-0 {{ Request::is('lab') ? 'active' : '' }}" aria-expanded="false">
					<i class="ti-settings"></i>
					<p>Admin <b class="caret"></b> </p>
				</a>
				<div class="collapse" id="nav-admin" aria-expanded="false" style="">
					<ul class="nav lf-side-nav m-0 mb-20">
						<li>
							<a href="/admin/items" class="">
								<span class="sidebar-normal">Items</span>
							</a>
						</li>
						<li>
							<a href="/admin/categories" class="">
								<span class="sidebar-normal">Categories</span>
							</a>
						</li>
						<li>
							<a href="/admin/companies" class="">
								<span class="sidebar-normal">Companies</span>
							</a>
						</li>
						<li>
							<a href="/admin/items" class="">
								<span class="sidebar-normal">Items</span>
							</a>
						</li>
						<li>
							<a href="/admin/locations" class="">
								<span class="sidebar-normal">Locations</span>
							</a>
						</li>
						<li>
							<a href="/admin/sizes" class="">
								<span class="sidebar-normal">Sizes</span>
							</a>
						</li>
						<li>
							<a href="/admin/users" class="">
								<span class="sidebar-normal">Users</span>
							</a>
						</li>
						<li>
							<a href="/admin/user-roles" class="">
								<span class="sidebar-normal">User Roles</span>
							</a>
						</li>
					</ul>
				</div>
			</li>
		</ul>
	</div>
</div>