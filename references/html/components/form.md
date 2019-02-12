# Форма

```html
<form action="/" method="post">
    <div>
        <label for="input">Поле для ввода</label>
        <input type="text" id="input" name="input">
    </div>
    <div>
        <fieldset>
            <legend>Выбор значения</legend>
            <label for="radio">Поле выбора</label>
            <input type="radio" name="radio" id="radio">
            <label for="radio2">Поле выбора 2</label>
            <input type="radio" name="radio" id="radio2">
        </fieldset>
    </div>
    <div>
        <fieldset>
            <legend>Выбор значения</legend>
            <label for="checkbox">
                <input type="checkbox" name="checkbox" id="checkbox">
                Поле выбора
            </label>
        </fieldset>
    </div>
    <div>
        <label for="select">Список с группами</label>
        <select name="select" id="select">
            <optgroup label="Цвет">
                <option value="c1">Апельсиновый</option>
                <option value="c2">Лимонный</option>
                <option value="c3">Персиковый</option>
            </optgroup>
            <optgroup label="Тон">
                <option value="s1">Светлый</option>
                <option value="s2">Нормальный</option>
                <option value="s3">Темный</option>
            </optgroup>
        </select>
    </div>
    <div>
        <label for="select2">Обычный список</label>
        <select name="select" id="select2">
            <option value="s1">Светлый</option>
            <option value="s2">Нормальный</option>
            <option value="s3">Темный</option>
        </select>
    </div>
    <div>
        <label for="textarea">Ввод текста</label>
        <textarea name="textarea" id="textarea" cols="30" rows="10"></textarea>
    </div>
    <button type="submit">Отправить</button>
</form>
```