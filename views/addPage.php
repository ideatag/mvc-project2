<h1 style="font-family: Arial, sans-serif; text-align: center;">Add Page</h1>
<form method="post" action="/page/add" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px;">
    <div style="margin-bottom: 12px;">
        <label for="name" style="font-family: Arial, sans-serif;">Name:</label><br>
        <input type="text" id="name" name="name" required style="width: 100%; padding-top:8px; padding-bottom:8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <div style="margin-bottom: 12px;">
        <label for="continut" style="font-family: Arial, sans-serif;">Continut:</label><br>
        <textarea id="continut" name="continut" required style="resize: none; height: 72px; width: 100%; padding-top:8px; padding-bottom:8px;  margin-right:8px; border: 1px solid #ccc; border-radius: 4px;"></textarea>
    </div>
    <div style="margin-bottom: 12px;">
        <label for="data" style="font-family: Arial, sans-serif;">Data:</label><br>
        <input type="datetime-local" id="data" name="data" required style="width: 100%; padding-top:8px; padding-bottom:8px; border: 1px solid #ccc; border-radius: 4px;">
    </div>
    <div style="text-align: center;">
        <input type="submit" value="Add Page" style="padding: 10px 20px; background-color: #28a745; color: #fff; border: none; border-radius: 5px; font-family: Arial, sans-serif;">
    </div>
</form>