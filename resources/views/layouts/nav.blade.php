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
						<a href="/admin/users/1/edit">
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
			<li class="active">
				<a href="/">
					<i class="ti-panel"></i>
					<p>Dashboard</p>
				</a>
			</li>
			<li>
				<a href="/lab">
					<i class="ti-user"></i>
					<p>The Lab</p>
				</a>
			</li>
			<li>
				<a href="/vava">
					<i class="ti-view-list-alt"></i>
					<p>VaVaVape</p>
				</a>
			</li>
			<li>
				<a href="/purple">
					<i class="ti-text"></i>
					<p>Purple Haze</p>
				</a>
			</li>
			<li>
				<a href="/admin/orders">
					<i class="ti-pencil-alt2"></i>
					<p>Orders</p>
				</a>
			</li>
			<li>
				<a href="/admin">
					<i class="ti-settings"></i>
					<p>Admin</p>
				</a>
			</li>
		</ul>
	</div>
</div>