<div class="mb-3">
    <label for="name" class="form-label">Tashkilot nomi</label>
    <input type="text" class="form-control" id="name" name="name" value="{{old ('name') ?? $company->name }}">
</div>

<div class="mb-3">
    <label for="address" class="form-label">Tashkilotning to'liq manzili</label>
    <input type="text" class="form-control" name="address"  value="{{old ('address')?? $company->address }}">
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Telfon raqami</label>
    <input type="text" class="form-control" name="phone"  value="{{old ('phone')?? $company->phone }}">
</div>
