          <menu class="list-group panel panel-default">
            <div class="panel-heading">Admin</div>
            <div class="panel-body">
                <menuitem class="list-group-item"><a href="{{ route('school.index') }}">school</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('degree.index') }}">degree</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('course.index') }}">course</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('user.index') }}">user</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('file.index') }}">file</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('permission.index') }}">permission</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('role.index') }}">role</a></menuitem>
            </div>
        </menu>
        <menu class="list-group panel panel-default">
            <div class="panel-heading">Faculty</div>
            <div class="panel-body">
                <menuitem class="list-group-item"><a href="{{ route('activity.index') }}">activity</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('incentive.index') }}">incentive</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('level.index') }}">level</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('merit.index') }}">merit</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('point.index') }}">point</a></menuitem>
                <menuitem class="list-group-item"><a href="{{ route('pointCategory.index') }}">point category</a></menuitem>
            </div>
          </menu>