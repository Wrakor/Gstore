function store( data )
{
    localStorage.clear();

    console.log("$data has information on:");
    for (key in data)
    {
        console.log("> " + key); //gives the default message

        localStorage.setItem(''+key,data[key]);


    }
}
