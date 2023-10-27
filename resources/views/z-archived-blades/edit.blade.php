<!DOCTYPE html>
<html>
<head>
    <title>Edit Content Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html, body {
            display: flex;
            justify-content: center;
            font-family: Roboto, Arial, sans-serif;
            font-size: 15px;
        }
        form {
            border: 5px solid #f1f1f1;
        }
        input[type="text"], input[type="password"], textarea {
            width: 100%;
            padding: 16px 8px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #8ebf42;
            color: white;
            padding: 14px 0;
            margin: 10px 0;
            border: none;
            cursor: grabbing;
            width: 100%;
        }
        h1 {
            text-align: center;
            font-size: 18px;
        }
        button:hover {
            opacity: 0.8;
        }
        .formcontainer {
            text-align: left;
            margin: 24px 50px 12px;
        }
        .container {
            padding: 16px 0;
            text-align: left;
        }
        /* Change styles for span on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
    </style>
</head>
<body>
    <form action="{{ route('update', $form->id) }}" method="POST">
        @csrf
        <h1>Edit Content</h1>
        <div class="formcontainer">
            <hr />
            <div class="container">
                <label for="name"><strong>Name</strong></label>
                <input type="text" name="name" value="{{ $form->name }}" required>
                <label for="projname"><strong>Project Name</strong></label>
                <input type="text" name="projname" value="{{ $form->projname }}" required>
                <label for="projdescription"><strong>Project Description</strong></label>
                <textarea name="projdescription" required>{{ $form->projdescription }}</textarea>
                <label for="relavance"><strong>Relevance</strong></label>
                <input type="text" name="relavance" value="{{ $form->Relavance }}" required>
                <label for="skills"><strong>Skills</strong></label>
                <input type="text" name="skills" value="{{ $form->skills }}" required>
                <label for="image"><strong>Image URL</strong></label>
                <input type="text" name="image" value="{{ $form->image }}" required>
                <label for="profilepic"><strong>Profile Picture URL</strong></label>
                <input type="text" name="profilepic" value="{{ $form->profilepic }}" required>
            </div>
            <button type="submit">Update</button>
        </div>
    </form>
</body>
</html>
