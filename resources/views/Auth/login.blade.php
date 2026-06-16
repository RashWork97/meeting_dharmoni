<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dharmoni App</title>
</head>
<body>
    <div className='flex items-center justify-top h-screen bg-gray-100'>
        <h3 className='pr-12 text-4xl p-4'>Welcome to <span className='text-blue-400 font-bold'>D-System</span></h3>

        <div className='bg-white p-8 rounded shadow-md w-full max-w-md'>
            <form>
                <div className='mb-4'>
                    <label className='block text-gray-700 mb-2' htmlFor='username'>Username</label>
                    <input className='w-full px-3 py-2 border rounded' type='text' id='username' placeholder='Enter your username' />
                </div>
                <div className='mb-6'>
                    <label className='block text-gray-700 mb-2' htmlFor='password'>Password</label>
                    <input className='w-full px-3 py-2 border rounded' type='password' id='password' placeholder='Enter your password' />
                </div>
                <button className='w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 transition duration-200' type='submit'>Login</button>
            </form>
        </div>
    </div>
</body>
</html>