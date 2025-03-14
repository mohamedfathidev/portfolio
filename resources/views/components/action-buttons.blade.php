{{-- 
When using this component: 
1- calls ActionButtons.php class and set the values in constructor assign it to public properties
2- pass the public properties to component itself and 
3- blade show the component with the values that passed to component itself

"here: Variables = public properties while blade attributes == parameters contstructor"
--}}

<div class="flex space-x-2">
    @if($editRouteProperty) 
        <a href="{{ route($editRouteProperty, $id) }}" class="px-3 py-1 bg-green-500 text-white rounded">Edit</a>
    @endif

    @if($deleteRouteProperty)
        <form action="{{ route($deleteRouteProperty, $id) }}" method="POST" onsubmit="return confirm('Are you sure want to delete?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="px-3 py-1 bg-red-500 text-white rounded">Delete</button>
        </form>
    @endif
</div>