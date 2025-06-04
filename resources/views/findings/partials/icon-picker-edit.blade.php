<div class="icon-select-dropdown" id="iconSelectDropdown">
    <div class="icon-search-container">
        <input type="text" id="iconSearchInput" placeholder="Search icons..." class="form-control form-control-sm">
        <i class="bi bi-search search-icon"></i>
    </div>
    <div class="icon-grid-container" id="iconGridContainer">
        <div class="icon-option" data-value="">
            <span class="text-muted">None</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-0-circle' ? 'selected' : '' }}"
             data-value="bi bi-0-circle" data-search="0-circle">
            <i class="bi bi-0-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">0-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-0-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-0-circle-fill" data-search="0-circle-fill">
            <i class="bi bi-0-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">0-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-0-square' ? 'selected' : '' }}"
             data-value="bi bi-0-square" data-search="0-square">
            <i class="bi bi-0-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">0-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-0-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-0-square-fill" data-search="0-square-fill">
            <i class="bi bi-0-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">0-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-1-circle' ? 'selected' : '' }}"
             data-value="bi bi-1-circle" data-search="1-circle">
            <i class="bi bi-1-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">1-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-1-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-1-circle-fill" data-search="1-circle-fill">
            <i class="bi bi-1-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">1-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-1-square' ? 'selected' : '' }}"
             data-value="bi bi-1-square" data-search="1-square">
            <i class="bi bi-1-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">1-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-1-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-1-square-fill" data-search="1-square-fill">
            <i class="bi bi-1-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">1-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-123' ? 'selected' : '' }}"
             data-value="bi bi-123" data-search="123">
            <i class="bi bi-123" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">123</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-2-circle' ? 'selected' : '' }}"
             data-value="bi bi-2-circle" data-search="2-circle">
            <i class="bi bi-2-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">2-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-2-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-2-circle-fill" data-search="2-circle-fill">
            <i class="bi bi-2-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">2-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-2-square' ? 'selected' : '' }}"
             data-value="bi bi-2-square" data-search="2-square">
            <i class="bi bi-2-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">2-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-2-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-2-square-fill" data-search="2-square-fill">
            <i class="bi bi-2-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">2-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-3-circle' ? 'selected' : '' }}"
             data-value="bi bi-3-circle" data-search="3-circle">
            <i class="bi bi-3-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">3-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-3-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-3-circle-fill" data-search="3-circle-fill">
            <i class="bi bi-3-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">3-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-3-square' ? 'selected' : '' }}"
             data-value="bi bi-3-square" data-search="3-square">
            <i class="bi bi-3-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">3-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-3-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-3-square-fill" data-search="3-square-fill">
            <i class="bi bi-3-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">3-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-4-circle' ? 'selected' : '' }}"
             data-value="bi bi-4-circle" data-search="4-circle">
            <i class="bi bi-4-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">4-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-4-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-4-circle-fill" data-search="4-circle-fill">
            <i class="bi bi-4-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">4-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-4-square' ? 'selected' : '' }}"
             data-value="bi bi-4-square" data-search="4-square">
            <i class="bi bi-4-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">4-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-4-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-4-square-fill" data-search="4-square-fill">
            <i class="bi bi-4-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">4-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-5-circle' ? 'selected' : '' }}"
             data-value="bi bi-5-circle" data-search="5-circle">
            <i class="bi bi-5-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">5-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-5-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-5-circle-fill" data-search="5-circle-fill">
            <i class="bi bi-5-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">5-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-5-square' ? 'selected' : '' }}"
             data-value="bi bi-5-square" data-search="5-square">
            <i class="bi bi-5-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">5-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-5-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-5-square-fill" data-search="5-square-fill">
            <i class="bi bi-5-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">5-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-6-circle' ? 'selected' : '' }}"
             data-value="bi bi-6-circle" data-search="6-circle">
            <i class="bi bi-6-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">6-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-6-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-6-circle-fill" data-search="6-circle-fill">
            <i class="bi bi-6-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">6-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-6-square' ? 'selected' : '' }}"
             data-value="bi bi-6-square" data-search="6-square">
            <i class="bi bi-6-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">6-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-6-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-6-square-fill" data-search="6-square-fill">
            <i class="bi bi-6-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">6-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-7-circle' ? 'selected' : '' }}"
             data-value="bi bi-7-circle" data-search="7-circle">
            <i class="bi bi-7-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">7-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-7-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-7-circle-fill" data-search="7-circle-fill">
            <i class="bi bi-7-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">7-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-7-square' ? 'selected' : '' }}"
             data-value="bi bi-7-square" data-search="7-square">
            <i class="bi bi-7-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">7-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-7-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-7-square-fill" data-search="7-square-fill">
            <i class="bi bi-7-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">7-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-8-circle' ? 'selected' : '' }}"
             data-value="bi bi-8-circle" data-search="8-circle">
            <i class="bi bi-8-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">8-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-8-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-8-circle-fill" data-search="8-circle-fill">
            <i class="bi bi-8-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">8-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-8-square' ? 'selected' : '' }}"
             data-value="bi bi-8-square" data-search="8-square">
            <i class="bi bi-8-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">8-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-8-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-8-square-fill" data-search="8-square-fill">
            <i class="bi bi-8-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">8-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-9-circle' ? 'selected' : '' }}"
             data-value="bi bi-9-circle" data-search="9-circle">
            <i class="bi bi-9-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">9-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-9-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-9-circle-fill" data-search="9-circle-fill">
            <i class="bi bi-9-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">9-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-9-square' ? 'selected' : '' }}"
             data-value="bi bi-9-square" data-search="9-square">
            <i class="bi bi-9-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">9-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-9-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-9-square-fill" data-search="9-square-fill">
            <i class="bi bi-9-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">9-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-activity' ? 'selected' : '' }}"
             data-value="bi bi-activity" data-search="activity">
            <i class="bi bi-activity" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">activity</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-airplane' ? 'selected' : '' }}"
             data-value="bi bi-airplane" data-search="airplane">
            <i class="bi bi-airplane" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">airplane</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-airplane-engines' ? 'selected' : '' }}"
             data-value="bi bi-airplane-engines" data-search="airplane-engines">
            <i class="bi bi-airplane-engines" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">airplane-engines</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-airplane-engines-fill' ? 'selected' : '' }}"
             data-value="bi bi-airplane-engines-fill" data-search="airplane-engines-fill">
            <i class="bi bi-airplane-engines-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">airplane-engines-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-airplane-fill' ? 'selected' : '' }}"
             data-value="bi bi-airplane-fill" data-search="airplane-fill">
            <i class="bi bi-airplane-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">airplane-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alarm' ? 'selected' : '' }}"
             data-value="bi bi-alarm" data-search="alarm">
            <i class="bi bi-alarm" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alarm</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alarm-fill' ? 'selected' : '' }}"
             data-value="bi bi-alarm-fill" data-search="alarm-fill">
            <i class="bi bi-alarm-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alarm-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alexa' ? 'selected' : '' }}"
             data-value="bi bi-alexa" data-search="alexa">
            <i class="bi bi-alexa" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alexa</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-bottom' ? 'selected' : '' }}"
             data-value="bi bi-align-bottom" data-search="align-bottom">
            <i class="bi bi-align-bottom" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-bottom</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-center' ? 'selected' : '' }}"
             data-value="bi bi-align-center" data-search="align-center">
            <i class="bi bi-align-center" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-center</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-end' ? 'selected' : '' }}"
             data-value="bi bi-align-end" data-search="align-end">
            <i class="bi bi-align-end" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-end</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-middle' ? 'selected' : '' }}"
             data-value="bi bi-align-middle" data-search="align-middle">
            <i class="bi bi-align-middle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-middle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-start' ? 'selected' : '' }}"
             data-value="bi bi-align-start" data-search="align-start">
            <i class="bi bi-align-start" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-start</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-align-top' ? 'selected' : '' }}"
             data-value="bi bi-align-top" data-search="align-top">
            <i class="bi bi-align-top" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">align-top</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alipay' ? 'selected' : '' }}"
             data-value="bi bi-alipay" data-search="alipay">
            <i class="bi bi-alipay" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alipay</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alphabet' ? 'selected' : '' }}"
             data-value="bi bi-alphabet" data-search="alphabet">
            <i class="bi bi-alphabet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alphabet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alphabet-uppercase' ? 'selected' : '' }}"
             data-value="bi bi-alphabet-uppercase" data-search="alphabet-uppercase">
            <i class="bi bi-alphabet-uppercase" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alphabet-uppercase</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-alt' ? 'selected' : '' }}"
             data-value="bi bi-alt" data-search="alt">
            <i class="bi bi-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-amazon' ? 'selected' : '' }}"
             data-value="bi bi-amazon" data-search="amazon">
            <i class="bi bi-amazon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">amazon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-amd' ? 'selected' : '' }}"
             data-value="bi bi-amd" data-search="amd">
            <i class="bi bi-amd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">amd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-android' ? 'selected' : '' }}"
             data-value="bi bi-android" data-search="android">
            <i class="bi bi-android" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">android</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-android2' ? 'selected' : '' }}"
             data-value="bi bi-android2" data-search="android2">
            <i class="bi bi-android2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">android2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-anthropic' ? 'selected' : '' }}"
             data-value="bi bi-anthropic" data-search="anthropic">
            <i class="bi bi-anthropic" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">anthropic</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-app' ? 'selected' : '' }}"
             data-value="bi bi-app" data-search="app">
            <i class="bi bi-app" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">app</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-app-indicator' ? 'selected' : '' }}"
             data-value="bi bi-app-indicator" data-search="app-indicator">
            <i class="bi bi-app-indicator" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">app-indicator</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-apple' ? 'selected' : '' }}"
             data-value="bi bi-apple" data-search="apple">
            <i class="bi bi-apple" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">apple</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-apple-music' ? 'selected' : '' }}"
             data-value="bi bi-apple-music" data-search="apple-music">
            <i class="bi bi-apple-music" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">apple-music</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-archive' ? 'selected' : '' }}"
             data-value="bi bi-archive" data-search="archive">
            <i class="bi bi-archive" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">archive</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-archive-fill' ? 'selected' : '' }}"
             data-value="bi bi-archive-fill" data-search="archive-fill">
            <i class="bi bi-archive-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">archive-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-90deg-down' ? 'selected' : '' }}"
             data-value="bi bi-arrow-90deg-down" data-search="arrow-90deg-down">
            <i class="bi bi-arrow-90deg-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-90deg-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-90deg-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-90deg-left" data-search="arrow-90deg-left">
            <i class="bi bi-arrow-90deg-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-90deg-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-90deg-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-90deg-right" data-search="arrow-90deg-right">
            <i class="bi bi-arrow-90deg-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-90deg-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-90deg-up' ? 'selected' : '' }}"
             data-value="bi bi-arrow-90deg-up" data-search="arrow-90deg-up">
            <i class="bi bi-arrow-90deg-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-90deg-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-bar-down' ? 'selected' : '' }}"
             data-value="bi bi-arrow-bar-down" data-search="arrow-bar-down">
            <i class="bi bi-arrow-bar-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-bar-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-bar-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-bar-left" data-search="arrow-bar-left">
            <i class="bi bi-arrow-bar-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-bar-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-bar-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-bar-right" data-search="arrow-bar-right">
            <i class="bi bi-arrow-bar-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-bar-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-bar-up' ? 'selected' : '' }}"
             data-value="bi bi-arrow-bar-up" data-search="arrow-bar-up">
            <i class="bi bi-arrow-bar-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-bar-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-clockwise' ? 'selected' : '' }}"
             data-value="bi bi-arrow-clockwise" data-search="arrow-clockwise">
            <i class="bi bi-arrow-clockwise" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-clockwise</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-counterclockwise' ? 'selected' : '' }}"
             data-value="bi bi-arrow-counterclockwise" data-search="arrow-counterclockwise">
            <i class="bi bi-arrow-counterclockwise" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-counterclockwise</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down" data-search="arrow-down">
            <i class="bi bi-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-circle" data-search="arrow-down-circle">
            <i class="bi bi-arrow-down-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-circle-fill" data-search="arrow-down-circle-fill">
            <i class="bi bi-arrow-down-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-left" data-search="arrow-down-left">
            <i class="bi bi-arrow-down-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-left-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-left-circle" data-search="arrow-down-left-circle">
            <i class="bi bi-arrow-down-left-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-left-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-left-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-left-circle-fill" data-search="arrow-down-left-circle-fill">
            <i class="bi bi-arrow-down-left-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-left-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-left-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-left-square" data-search="arrow-down-left-square">
            <i class="bi bi-arrow-down-left-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-left-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-left-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-left-square-fill" data-search="arrow-down-left-square-fill">
            <i class="bi bi-arrow-down-left-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-left-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-right" data-search="arrow-down-right">
            <i class="bi bi-arrow-down-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-right-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-right-circle" data-search="arrow-down-right-circle">
            <i class="bi bi-arrow-down-right-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-right-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-right-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-right-circle-fill" data-search="arrow-down-right-circle-fill">
            <i class="bi bi-arrow-down-right-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-right-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-right-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-right-square" data-search="arrow-down-right-square">
            <i class="bi bi-arrow-down-right-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-right-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-right-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-right-square-fill" data-search="arrow-down-right-square-fill">
            <i class="bi bi-arrow-down-right-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-right-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-short' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-short" data-search="arrow-down-short">
            <i class="bi bi-arrow-down-short" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-short</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-square" data-search="arrow-down-square">
            <i class="bi bi-arrow-down-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-square-fill" data-search="arrow-down-square-fill">
            <i class="bi bi-arrow-down-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-down-up' ? 'selected' : '' }}"
             data-value="bi bi-arrow-down-up" data-search="arrow-down-up">
            <i class="bi bi-arrow-down-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-down-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left" data-search="arrow-left">
            <i class="bi bi-arrow-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-circle" data-search="arrow-left-circle">
            <i class="bi bi-arrow-left-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-circle-fill" data-search="arrow-left-circle-fill">
            <i class="bi bi-arrow-left-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-right" data-search="arrow-left-right">
            <i class="bi bi-arrow-left-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-short' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-short" data-search="arrow-left-short">
            <i class="bi bi-arrow-left-short" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-short</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-square" data-search="arrow-left-square">
            <i class="bi bi-arrow-left-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-left-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-left-square-fill" data-search="arrow-left-square-fill">
            <i class="bi bi-arrow-left-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-left-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-repeat' ? 'selected' : '' }}"
             data-value="bi bi-arrow-repeat" data-search="arrow-repeat">
            <i class="bi bi-arrow-repeat" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-repeat</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-return-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-return-left" data-search="arrow-return-left">
            <i class="bi bi-arrow-return-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-return-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-return-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-return-right" data-search="arrow-return-right">
            <i class="bi bi-arrow-return-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-return-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right" data-search="arrow-right">
            <i class="bi bi-arrow-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right-circle" data-search="arrow-right-circle">
            <i class="bi bi-arrow-right-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right-circle-fill" data-search="arrow-right-circle-fill">
            <i class="bi bi-arrow-right-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right-short' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right-short" data-search="arrow-right-short">
            <i class="bi bi-arrow-right-short" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right-short</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right-square" data-search="arrow-right-square">
            <i class="bi bi-arrow-right-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-right-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-right-square-fill" data-search="arrow-right-square-fill">
            <i class="bi bi-arrow-right-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-right-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-through-heart' ? 'selected' : '' }}"
             data-value="bi bi-arrow-through-heart" data-search="arrow-through-heart">
            <i class="bi bi-arrow-through-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-through-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-through-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-through-heart-fill" data-search="arrow-through-heart-fill">
            <i class="bi bi-arrow-through-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-through-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up" data-search="arrow-up">
            <i class="bi bi-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-circle" data-search="arrow-up-circle">
            <i class="bi bi-arrow-up-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-circle-fill" data-search="arrow-up-circle-fill">
            <i class="bi bi-arrow-up-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-left' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-left" data-search="arrow-up-left">
            <i class="bi bi-arrow-up-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-left-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-left-circle" data-search="arrow-up-left-circle">
            <i class="bi bi-arrow-up-left-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-left-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-left-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-left-circle-fill" data-search="arrow-up-left-circle-fill">
            <i class="bi bi-arrow-up-left-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-left-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-left-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-left-square" data-search="arrow-up-left-square">
            <i class="bi bi-arrow-up-left-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-left-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-left-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-left-square-fill" data-search="arrow-up-left-square-fill">
            <i class="bi bi-arrow-up-left-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-left-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-right' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-right" data-search="arrow-up-right">
            <i class="bi bi-arrow-up-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-right-circle' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-right-circle" data-search="arrow-up-right-circle">
            <i class="bi bi-arrow-up-right-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-right-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-right-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-right-circle-fill" data-search="arrow-up-right-circle-fill">
            <i class="bi bi-arrow-up-right-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-right-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-right-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-right-square" data-search="arrow-up-right-square">
            <i class="bi bi-arrow-up-right-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-right-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-right-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-right-square-fill" data-search="arrow-up-right-square-fill">
            <i class="bi bi-arrow-up-right-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-right-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-short' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-short" data-search="arrow-up-short">
            <i class="bi bi-arrow-up-short" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-short</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-square' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-square" data-search="arrow-up-square">
            <i class="bi bi-arrow-up-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrow-up-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-arrow-up-square-fill" data-search="arrow-up-square-fill">
            <i class="bi bi-arrow-up-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrow-up-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows' ? 'selected' : '' }}"
             data-value="bi bi-arrows" data-search="arrows">
            <i class="bi bi-arrows" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-angle-contract' ? 'selected' : '' }}"
             data-value="bi bi-arrows-angle-contract" data-search="arrows-angle-contract">
            <i class="bi bi-arrows-angle-contract" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-angle-contract</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-angle-expand' ? 'selected' : '' }}"
             data-value="bi bi-arrows-angle-expand" data-search="arrows-angle-expand">
            <i class="bi bi-arrows-angle-expand" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-angle-expand</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-collapse' ? 'selected' : '' }}"
             data-value="bi bi-arrows-collapse" data-search="arrows-collapse">
            <i class="bi bi-arrows-collapse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-collapse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-collapse-vertical' ? 'selected' : '' }}"
             data-value="bi bi-arrows-collapse-vertical" data-search="arrows-collapse-vertical">
            <i class="bi bi-arrows-collapse-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-collapse-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-expand' ? 'selected' : '' }}"
             data-value="bi bi-arrows-expand" data-search="arrows-expand">
            <i class="bi bi-arrows-expand" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-expand</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-expand-vertical' ? 'selected' : '' }}"
             data-value="bi bi-arrows-expand-vertical" data-search="arrows-expand-vertical">
            <i class="bi bi-arrows-expand-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-expand-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-fullscreen' ? 'selected' : '' }}"
             data-value="bi bi-arrows-fullscreen" data-search="arrows-fullscreen">
            <i class="bi bi-arrows-fullscreen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-fullscreen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-move' ? 'selected' : '' }}"
             data-value="bi bi-arrows-move" data-search="arrows-move">
            <i class="bi bi-arrows-move" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-move</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-arrows-vertical' ? 'selected' : '' }}"
             data-value="bi bi-arrows-vertical" data-search="arrows-vertical">
            <i class="bi bi-arrows-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">arrows-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-aspect-ratio' ? 'selected' : '' }}"
             data-value="bi bi-aspect-ratio" data-search="aspect-ratio">
            <i class="bi bi-aspect-ratio" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">aspect-ratio</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-aspect-ratio-fill' ? 'selected' : '' }}"
             data-value="bi bi-aspect-ratio-fill" data-search="aspect-ratio-fill">
            <i class="bi bi-aspect-ratio-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">aspect-ratio-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-asterisk' ? 'selected' : '' }}"
             data-value="bi bi-asterisk" data-search="asterisk">
            <i class="bi bi-asterisk" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">asterisk</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-at' ? 'selected' : '' }}"
             data-value="bi bi-at" data-search="at">
            <i class="bi bi-at" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">at</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-award' ? 'selected' : '' }}"
             data-value="bi bi-award" data-search="award">
            <i class="bi bi-award" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">award</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-award-fill' ? 'selected' : '' }}"
             data-value="bi bi-award-fill" data-search="award-fill">
            <i class="bi bi-award-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">award-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-back' ? 'selected' : '' }}"
             data-value="bi bi-back" data-search="back">
            <i class="bi bi-back" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">back</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack' ? 'selected' : '' }}"
             data-value="bi bi-backpack" data-search="backpack">
            <i class="bi bi-backpack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack-fill' ? 'selected' : '' }}"
             data-value="bi bi-backpack-fill" data-search="backpack-fill">
            <i class="bi bi-backpack-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack2' ? 'selected' : '' }}"
             data-value="bi bi-backpack2" data-search="backpack2">
            <i class="bi bi-backpack2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack2-fill' ? 'selected' : '' }}"
             data-value="bi bi-backpack2-fill" data-search="backpack2-fill">
            <i class="bi bi-backpack2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack3' ? 'selected' : '' }}"
             data-value="bi bi-backpack3" data-search="backpack3">
            <i class="bi bi-backpack3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack3-fill' ? 'selected' : '' }}"
             data-value="bi bi-backpack3-fill" data-search="backpack3-fill">
            <i class="bi bi-backpack3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack4' ? 'selected' : '' }}"
             data-value="bi bi-backpack4" data-search="backpack4">
            <i class="bi bi-backpack4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backpack4-fill' ? 'selected' : '' }}"
             data-value="bi bi-backpack4-fill" data-search="backpack4-fill">
            <i class="bi bi-backpack4-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backpack4-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backspace' ? 'selected' : '' }}"
             data-value="bi bi-backspace" data-search="backspace">
            <i class="bi bi-backspace" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backspace</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backspace-fill' ? 'selected' : '' }}"
             data-value="bi bi-backspace-fill" data-search="backspace-fill">
            <i class="bi bi-backspace-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backspace-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backspace-reverse' ? 'selected' : '' }}"
             data-value="bi bi-backspace-reverse" data-search="backspace-reverse">
            <i class="bi bi-backspace-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backspace-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-backspace-reverse-fill' ? 'selected' : '' }}"
             data-value="bi bi-backspace-reverse-fill" data-search="backspace-reverse-fill">
            <i class="bi bi-backspace-reverse-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">backspace-reverse-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-3d' ? 'selected' : '' }}"
             data-value="bi bi-badge-3d" data-search="badge-3d">
            <i class="bi bi-badge-3d" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-3d</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-3d-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-3d-fill" data-search="badge-3d-fill">
            <i class="bi bi-badge-3d-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-3d-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-4k' ? 'selected' : '' }}"
             data-value="bi bi-badge-4k" data-search="badge-4k">
            <i class="bi bi-badge-4k" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-4k</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-4k-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-4k-fill" data-search="badge-4k-fill">
            <i class="bi bi-badge-4k-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-4k-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-8k' ? 'selected' : '' }}"
             data-value="bi bi-badge-8k" data-search="badge-8k">
            <i class="bi bi-badge-8k" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-8k</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-8k-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-8k-fill" data-search="badge-8k-fill">
            <i class="bi bi-badge-8k-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-8k-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-ad' ? 'selected' : '' }}"
             data-value="bi bi-badge-ad" data-search="badge-ad">
            <i class="bi bi-badge-ad" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-ad</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-ad-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-ad-fill" data-search="badge-ad-fill">
            <i class="bi bi-badge-ad-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-ad-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-ar' ? 'selected' : '' }}"
             data-value="bi bi-badge-ar" data-search="badge-ar">
            <i class="bi bi-badge-ar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-ar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-ar-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-ar-fill" data-search="badge-ar-fill">
            <i class="bi bi-badge-ar-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-ar-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-cc' ? 'selected' : '' }}"
             data-value="bi bi-badge-cc" data-search="badge-cc">
            <i class="bi bi-badge-cc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-cc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-cc-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-cc-fill" data-search="badge-cc-fill">
            <i class="bi bi-badge-cc-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-cc-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-hd' ? 'selected' : '' }}"
             data-value="bi bi-badge-hd" data-search="badge-hd">
            <i class="bi bi-badge-hd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-hd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-hd-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-hd-fill" data-search="badge-hd-fill">
            <i class="bi bi-badge-hd-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-hd-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-sd' ? 'selected' : '' }}"
             data-value="bi bi-badge-sd" data-search="badge-sd">
            <i class="bi bi-badge-sd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-sd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-sd-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-sd-fill" data-search="badge-sd-fill">
            <i class="bi bi-badge-sd-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-sd-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-tm' ? 'selected' : '' }}"
             data-value="bi bi-badge-tm" data-search="badge-tm">
            <i class="bi bi-badge-tm" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-tm</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-tm-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-tm-fill" data-search="badge-tm-fill">
            <i class="bi bi-badge-tm-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-tm-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-vo' ? 'selected' : '' }}"
             data-value="bi bi-badge-vo" data-search="badge-vo">
            <i class="bi bi-badge-vo" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-vo</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-vo-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-vo-fill" data-search="badge-vo-fill">
            <i class="bi bi-badge-vo-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-vo-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-vr' ? 'selected' : '' }}"
             data-value="bi bi-badge-vr" data-search="badge-vr">
            <i class="bi bi-badge-vr" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-vr</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-vr-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-vr-fill" data-search="badge-vr-fill">
            <i class="bi bi-badge-vr-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-vr-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-wc' ? 'selected' : '' }}"
             data-value="bi bi-badge-wc" data-search="badge-wc">
            <i class="bi bi-badge-wc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-wc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-badge-wc-fill' ? 'selected' : '' }}"
             data-value="bi bi-badge-wc-fill" data-search="badge-wc-fill">
            <i class="bi bi-badge-wc-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">badge-wc-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag' ? 'selected' : '' }}"
             data-value="bi bi-bag" data-search="bag">
            <i class="bi bi-bag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-check' ? 'selected' : '' }}"
             data-value="bi bi-bag-check" data-search="bag-check">
            <i class="bi bi-bag-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-check-fill" data-search="bag-check-fill">
            <i class="bi bi-bag-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-dash' ? 'selected' : '' }}"
             data-value="bi bi-bag-dash" data-search="bag-dash">
            <i class="bi bi-bag-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-dash-fill" data-search="bag-dash-fill">
            <i class="bi bi-bag-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-fill" data-search="bag-fill">
            <i class="bi bi-bag-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-heart' ? 'selected' : '' }}"
             data-value="bi bi-bag-heart" data-search="bag-heart">
            <i class="bi bi-bag-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-heart-fill" data-search="bag-heart-fill">
            <i class="bi bi-bag-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-plus' ? 'selected' : '' }}"
             data-value="bi bi-bag-plus" data-search="bag-plus">
            <i class="bi bi-bag-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-plus-fill" data-search="bag-plus-fill">
            <i class="bi bi-bag-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-x' ? 'selected' : '' }}"
             data-value="bi bi-bag-x" data-search="bag-x">
            <i class="bi bi-bag-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bag-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-bag-x-fill" data-search="bag-x-fill">
            <i class="bi bi-bag-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bag-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-balloon' ? 'selected' : '' }}"
             data-value="bi bi-balloon" data-search="balloon">
            <i class="bi bi-balloon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">balloon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-balloon-fill' ? 'selected' : '' }}"
             data-value="bi bi-balloon-fill" data-search="balloon-fill">
            <i class="bi bi-balloon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">balloon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-balloon-heart' ? 'selected' : '' }}"
             data-value="bi bi-balloon-heart" data-search="balloon-heart">
            <i class="bi bi-balloon-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">balloon-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-balloon-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-balloon-heart-fill" data-search="balloon-heart-fill">
            <i class="bi bi-balloon-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">balloon-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ban' ? 'selected' : '' }}"
             data-value="bi bi-ban" data-search="ban">
            <i class="bi bi-ban" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ban</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ban-fill' ? 'selected' : '' }}"
             data-value="bi bi-ban-fill" data-search="ban-fill">
            <i class="bi bi-ban-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ban-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bandaid' ? 'selected' : '' }}"
             data-value="bi bi-bandaid" data-search="bandaid">
            <i class="bi bi-bandaid" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bandaid</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bandaid-fill' ? 'selected' : '' }}"
             data-value="bi bi-bandaid-fill" data-search="bandaid-fill">
            <i class="bi bi-bandaid-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bandaid-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bank' ? 'selected' : '' }}"
             data-value="bi bi-bank" data-search="bank">
            <i class="bi bi-bank" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bank</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bank2' ? 'selected' : '' }}"
             data-value="bi bi-bank2" data-search="bank2">
            <i class="bi bi-bank2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bank2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bar-chart' ? 'selected' : '' }}"
             data-value="bi bi-bar-chart" data-search="bar-chart">
            <i class="bi bi-bar-chart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bar-chart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bar-chart-fill' ? 'selected' : '' }}"
             data-value="bi bi-bar-chart-fill" data-search="bar-chart-fill">
            <i class="bi bi-bar-chart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bar-chart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bar-chart-line' ? 'selected' : '' }}"
             data-value="bi bi-bar-chart-line" data-search="bar-chart-line">
            <i class="bi bi-bar-chart-line" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bar-chart-line</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bar-chart-line-fill' ? 'selected' : '' }}"
             data-value="bi bi-bar-chart-line-fill" data-search="bar-chart-line-fill">
            <i class="bi bi-bar-chart-line-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bar-chart-line-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bar-chart-steps' ? 'selected' : '' }}"
             data-value="bi bi-bar-chart-steps" data-search="bar-chart-steps">
            <i class="bi bi-bar-chart-steps" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bar-chart-steps</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket' ? 'selected' : '' }}"
             data-value="bi bi-basket" data-search="basket">
            <i class="bi bi-basket" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket-fill' ? 'selected' : '' }}"
             data-value="bi bi-basket-fill" data-search="basket-fill">
            <i class="bi bi-basket-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket2' ? 'selected' : '' }}"
             data-value="bi bi-basket2" data-search="basket2">
            <i class="bi bi-basket2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket2-fill' ? 'selected' : '' }}"
             data-value="bi bi-basket2-fill" data-search="basket2-fill">
            <i class="bi bi-basket2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket3' ? 'selected' : '' }}"
             data-value="bi bi-basket3" data-search="basket3">
            <i class="bi bi-basket3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-basket3-fill' ? 'selected' : '' }}"
             data-value="bi bi-basket3-fill" data-search="basket3-fill">
            <i class="bi bi-basket3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">basket3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-battery' ? 'selected' : '' }}"
             data-value="bi bi-battery" data-search="battery">
            <i class="bi bi-battery" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">battery</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-battery-charging' ? 'selected' : '' }}"
             data-value="bi bi-battery-charging" data-search="battery-charging">
            <i class="bi bi-battery-charging" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">battery-charging</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-battery-full' ? 'selected' : '' }}"
             data-value="bi bi-battery-full" data-search="battery-full">
            <i class="bi bi-battery-full" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">battery-full</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-battery-half' ? 'selected' : '' }}"
             data-value="bi bi-battery-half" data-search="battery-half">
            <i class="bi bi-battery-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">battery-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-battery-low' ? 'selected' : '' }}"
             data-value="bi bi-battery-low" data-search="battery-low">
            <i class="bi bi-battery-low" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">battery-low</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-beaker' ? 'selected' : '' }}"
             data-value="bi bi-beaker" data-search="beaker">
            <i class="bi bi-beaker" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">beaker</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-beaker-fill' ? 'selected' : '' }}"
             data-value="bi bi-beaker-fill" data-search="beaker-fill">
            <i class="bi bi-beaker-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">beaker-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-behance' ? 'selected' : '' }}"
             data-value="bi bi-behance" data-search="behance">
            <i class="bi bi-behance" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">behance</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bell' ? 'selected' : '' }}"
             data-value="bi bi-bell" data-search="bell">
            <i class="bi bi-bell" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bell</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bell-fill' ? 'selected' : '' }}"
             data-value="bi bi-bell-fill" data-search="bell-fill">
            <i class="bi bi-bell-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bell-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bell-slash' ? 'selected' : '' }}"
             data-value="bi bi-bell-slash" data-search="bell-slash">
            <i class="bi bi-bell-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bell-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bell-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-bell-slash-fill" data-search="bell-slash-fill">
            <i class="bi bi-bell-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bell-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bezier' ? 'selected' : '' }}"
             data-value="bi bi-bezier" data-search="bezier">
            <i class="bi bi-bezier" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bezier</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bezier2' ? 'selected' : '' }}"
             data-value="bi bi-bezier2" data-search="bezier2">
            <i class="bi bi-bezier2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bezier2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bicycle' ? 'selected' : '' }}"
             data-value="bi bi-bicycle" data-search="bicycle">
            <i class="bi bi-bicycle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bicycle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bing' ? 'selected' : '' }}"
             data-value="bi bi-bing" data-search="bing">
            <i class="bi bi-bing" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bing</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-binoculars' ? 'selected' : '' }}"
             data-value="bi bi-binoculars" data-search="binoculars">
            <i class="bi bi-binoculars" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">binoculars</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-binoculars-fill' ? 'selected' : '' }}"
             data-value="bi bi-binoculars-fill" data-search="binoculars-fill">
            <i class="bi bi-binoculars-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">binoculars-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-blockquote-left' ? 'selected' : '' }}"
             data-value="bi bi-blockquote-left" data-search="blockquote-left">
            <i class="bi bi-blockquote-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">blockquote-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-blockquote-right' ? 'selected' : '' }}"
             data-value="bi bi-blockquote-right" data-search="blockquote-right">
            <i class="bi bi-blockquote-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">blockquote-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bluesky' ? 'selected' : '' }}"
             data-value="bi bi-bluesky" data-search="bluesky">
            <i class="bi bi-bluesky" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bluesky</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bluetooth' ? 'selected' : '' }}"
             data-value="bi bi-bluetooth" data-search="bluetooth">
            <i class="bi bi-bluetooth" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bluetooth</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-body-text' ? 'selected' : '' }}"
             data-value="bi bi-body-text" data-search="body-text">
            <i class="bi bi-body-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">body-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-book' ? 'selected' : '' }}"
             data-value="bi bi-book" data-search="book">
            <i class="bi bi-book" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">book</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-book-fill' ? 'selected' : '' }}"
             data-value="bi bi-book-fill" data-search="book-fill">
            <i class="bi bi-book-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">book-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-book-half' ? 'selected' : '' }}"
             data-value="bi bi-book-half" data-search="book-half">
            <i class="bi bi-book-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">book-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark' ? 'selected' : '' }}"
             data-value="bi bi-bookmark" data-search="bookmark">
            <i class="bi bi-bookmark" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-check' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-check" data-search="bookmark-check">
            <i class="bi bi-bookmark-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-check-fill" data-search="bookmark-check-fill">
            <i class="bi bi-bookmark-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-dash' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-dash" data-search="bookmark-dash">
            <i class="bi bi-bookmark-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-dash-fill" data-search="bookmark-dash-fill">
            <i class="bi bi-bookmark-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-fill" data-search="bookmark-fill">
            <i class="bi bi-bookmark-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-heart' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-heart" data-search="bookmark-heart">
            <i class="bi bi-bookmark-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-heart-fill" data-search="bookmark-heart-fill">
            <i class="bi bi-bookmark-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-plus' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-plus" data-search="bookmark-plus">
            <i class="bi bi-bookmark-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-plus-fill" data-search="bookmark-plus-fill">
            <i class="bi bi-bookmark-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-star' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-star" data-search="bookmark-star">
            <i class="bi bi-bookmark-star" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-star</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-star-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-star-fill" data-search="bookmark-star-fill">
            <i class="bi bi-bookmark-star-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-star-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-x' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-x" data-search="bookmark-x">
            <i class="bi bi-bookmark-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmark-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmark-x-fill" data-search="bookmark-x-fill">
            <i class="bi bi-bookmark-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmark-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmarks' ? 'selected' : '' }}"
             data-value="bi bi-bookmarks" data-search="bookmarks">
            <i class="bi bi-bookmarks" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmarks</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookmarks-fill' ? 'selected' : '' }}"
             data-value="bi bi-bookmarks-fill" data-search="bookmarks-fill">
            <i class="bi bi-bookmarks-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookmarks-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bookshelf' ? 'selected' : '' }}"
             data-value="bi bi-bookshelf" data-search="bookshelf">
            <i class="bi bi-bookshelf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bookshelf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-boombox' ? 'selected' : '' }}"
             data-value="bi bi-boombox" data-search="boombox">
            <i class="bi bi-boombox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">boombox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-boombox-fill' ? 'selected' : '' }}"
             data-value="bi bi-boombox-fill" data-search="boombox-fill">
            <i class="bi bi-boombox-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">boombox-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bootstrap' ? 'selected' : '' }}"
             data-value="bi bi-bootstrap" data-search="bootstrap">
            <i class="bi bi-bootstrap" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bootstrap</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bootstrap-fill' ? 'selected' : '' }}"
             data-value="bi bi-bootstrap-fill" data-search="bootstrap-fill">
            <i class="bi bi-bootstrap-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bootstrap-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bootstrap-reboot' ? 'selected' : '' }}"
             data-value="bi bi-bootstrap-reboot" data-search="bootstrap-reboot">
            <i class="bi bi-bootstrap-reboot" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bootstrap-reboot</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border' ? 'selected' : '' }}"
             data-value="bi bi-border" data-search="border">
            <i class="bi bi-border" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-all' ? 'selected' : '' }}"
             data-value="bi bi-border-all" data-search="border-all">
            <i class="bi bi-border-all" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-all</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-bottom' ? 'selected' : '' }}"
             data-value="bi bi-border-bottom" data-search="border-bottom">
            <i class="bi bi-border-bottom" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-bottom</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-center' ? 'selected' : '' }}"
             data-value="bi bi-border-center" data-search="border-center">
            <i class="bi bi-border-center" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-center</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-inner' ? 'selected' : '' }}"
             data-value="bi bi-border-inner" data-search="border-inner">
            <i class="bi bi-border-inner" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-inner</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-left' ? 'selected' : '' }}"
             data-value="bi bi-border-left" data-search="border-left">
            <i class="bi bi-border-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-middle' ? 'selected' : '' }}"
             data-value="bi bi-border-middle" data-search="border-middle">
            <i class="bi bi-border-middle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-middle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-outer' ? 'selected' : '' }}"
             data-value="bi bi-border-outer" data-search="border-outer">
            <i class="bi bi-border-outer" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-outer</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-right' ? 'selected' : '' }}"
             data-value="bi bi-border-right" data-search="border-right">
            <i class="bi bi-border-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-style' ? 'selected' : '' }}"
             data-value="bi bi-border-style" data-search="border-style">
            <i class="bi bi-border-style" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-style</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-top' ? 'selected' : '' }}"
             data-value="bi bi-border-top" data-search="border-top">
            <i class="bi bi-border-top" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-top</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-border-width' ? 'selected' : '' }}"
             data-value="bi bi-border-width" data-search="border-width">
            <i class="bi bi-border-width" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">border-width</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bounding-box' ? 'selected' : '' }}"
             data-value="bi bi-bounding-box" data-search="bounding-box">
            <i class="bi bi-bounding-box" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bounding-box</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bounding-box-circles' ? 'selected' : '' }}"
             data-value="bi bi-bounding-box-circles" data-search="bounding-box-circles">
            <i class="bi bi-bounding-box-circles" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bounding-box-circles</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box' ? 'selected' : '' }}"
             data-value="bi bi-box" data-search="box">
            <i class="bi bi-box" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-down" data-search="box-arrow-down">
            <i class="bi bi-box-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-down-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-down-left" data-search="box-arrow-down-left">
            <i class="bi bi-box-arrow-down-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-down-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-down-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-down-right" data-search="box-arrow-down-right">
            <i class="bi bi-box-arrow-down-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-down-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-down' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-down" data-search="box-arrow-in-down">
            <i class="bi bi-box-arrow-in-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-down-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-down-left" data-search="box-arrow-in-down-left">
            <i class="bi bi-box-arrow-in-down-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-down-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-down-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-down-right" data-search="box-arrow-in-down-right">
            <i class="bi bi-box-arrow-in-down-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-down-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-left" data-search="box-arrow-in-left">
            <i class="bi bi-box-arrow-in-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-right" data-search="box-arrow-in-right">
            <i class="bi bi-box-arrow-in-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-up' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-up" data-search="box-arrow-in-up">
            <i class="bi bi-box-arrow-in-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-up-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-up-left" data-search="box-arrow-in-up-left">
            <i class="bi bi-box-arrow-in-up-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-up-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-in-up-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-in-up-right" data-search="box-arrow-in-up-right">
            <i class="bi bi-box-arrow-in-up-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-in-up-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-left" data-search="box-arrow-left">
            <i class="bi bi-box-arrow-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-right" data-search="box-arrow-right">
            <i class="bi bi-box-arrow-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-up" data-search="box-arrow-up">
            <i class="bi bi-box-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-up-left' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-up-left" data-search="box-arrow-up-left">
            <i class="bi bi-box-arrow-up-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-up-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-arrow-up-right' ? 'selected' : '' }}"
             data-value="bi bi-box-arrow-up-right" data-search="box-arrow-up-right">
            <i class="bi bi-box-arrow-up-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-arrow-up-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-fill' ? 'selected' : '' }}"
             data-value="bi bi-box-fill" data-search="box-fill">
            <i class="bi bi-box-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-seam' ? 'selected' : '' }}"
             data-value="bi bi-box-seam" data-search="box-seam">
            <i class="bi bi-box-seam" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-seam</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box-seam-fill' ? 'selected' : '' }}"
             data-value="bi bi-box-seam-fill" data-search="box-seam-fill">
            <i class="bi bi-box-seam-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box-seam-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box2' ? 'selected' : '' }}"
             data-value="bi bi-box2" data-search="box2">
            <i class="bi bi-box2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box2-fill' ? 'selected' : '' }}"
             data-value="bi bi-box2-fill" data-search="box2-fill">
            <i class="bi bi-box2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box2-heart' ? 'selected' : '' }}"
             data-value="bi bi-box2-heart" data-search="box2-heart">
            <i class="bi bi-box2-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box2-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-box2-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-box2-heart-fill" data-search="box2-heart-fill">
            <i class="bi bi-box2-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">box2-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-boxes' ? 'selected' : '' }}"
             data-value="bi bi-boxes" data-search="boxes">
            <i class="bi bi-boxes" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">boxes</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-braces' ? 'selected' : '' }}"
             data-value="bi bi-braces" data-search="braces">
            <i class="bi bi-braces" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">braces</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-braces-asterisk' ? 'selected' : '' }}"
             data-value="bi bi-braces-asterisk" data-search="braces-asterisk">
            <i class="bi bi-braces-asterisk" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">braces-asterisk</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bricks' ? 'selected' : '' }}"
             data-value="bi bi-bricks" data-search="bricks">
            <i class="bi bi-bricks" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bricks</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-briefcase' ? 'selected' : '' }}"
             data-value="bi bi-briefcase" data-search="briefcase">
            <i class="bi bi-briefcase" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">briefcase</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-briefcase-fill' ? 'selected' : '' }}"
             data-value="bi bi-briefcase-fill" data-search="briefcase-fill">
            <i class="bi bi-briefcase-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">briefcase-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-alt-high' ? 'selected' : '' }}"
             data-value="bi bi-brightness-alt-high" data-search="brightness-alt-high">
            <i class="bi bi-brightness-alt-high" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-alt-high</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-alt-high-fill' ? 'selected' : '' }}"
             data-value="bi bi-brightness-alt-high-fill" data-search="brightness-alt-high-fill">
            <i class="bi bi-brightness-alt-high-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-alt-high-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-alt-low' ? 'selected' : '' }}"
             data-value="bi bi-brightness-alt-low" data-search="brightness-alt-low">
            <i class="bi bi-brightness-alt-low" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-alt-low</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-alt-low-fill' ? 'selected' : '' }}"
             data-value="bi bi-brightness-alt-low-fill" data-search="brightness-alt-low-fill">
            <i class="bi bi-brightness-alt-low-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-alt-low-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-high' ? 'selected' : '' }}"
             data-value="bi bi-brightness-high" data-search="brightness-high">
            <i class="bi bi-brightness-high" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-high</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-high-fill' ? 'selected' : '' }}"
             data-value="bi bi-brightness-high-fill" data-search="brightness-high-fill">
            <i class="bi bi-brightness-high-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-high-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-low' ? 'selected' : '' }}"
             data-value="bi bi-brightness-low" data-search="brightness-low">
            <i class="bi bi-brightness-low" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-low</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brightness-low-fill' ? 'selected' : '' }}"
             data-value="bi bi-brightness-low-fill" data-search="brightness-low-fill">
            <i class="bi bi-brightness-low-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brightness-low-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brilliance' ? 'selected' : '' }}"
             data-value="bi bi-brilliance" data-search="brilliance">
            <i class="bi bi-brilliance" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brilliance</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-broadcast' ? 'selected' : '' }}"
             data-value="bi bi-broadcast" data-search="broadcast">
            <i class="bi bi-broadcast" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">broadcast</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-broadcast-pin' ? 'selected' : '' }}"
             data-value="bi bi-broadcast-pin" data-search="broadcast-pin">
            <i class="bi bi-broadcast-pin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">broadcast-pin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-browser-chrome' ? 'selected' : '' }}"
             data-value="bi bi-browser-chrome" data-search="browser-chrome">
            <i class="bi bi-browser-chrome" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">browser-chrome</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-browser-edge' ? 'selected' : '' }}"
             data-value="bi bi-browser-edge" data-search="browser-edge">
            <i class="bi bi-browser-edge" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">browser-edge</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-browser-firefox' ? 'selected' : '' }}"
             data-value="bi bi-browser-firefox" data-search="browser-firefox">
            <i class="bi bi-browser-firefox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">browser-firefox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-browser-safari' ? 'selected' : '' }}"
             data-value="bi bi-browser-safari" data-search="browser-safari">
            <i class="bi bi-browser-safari" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">browser-safari</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brush' ? 'selected' : '' }}"
             data-value="bi bi-brush" data-search="brush">
            <i class="bi bi-brush" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brush</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-brush-fill' ? 'selected' : '' }}"
             data-value="bi bi-brush-fill" data-search="brush-fill">
            <i class="bi bi-brush-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">brush-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bucket' ? 'selected' : '' }}"
             data-value="bi bi-bucket" data-search="bucket">
            <i class="bi bi-bucket" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bucket</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bucket-fill' ? 'selected' : '' }}"
             data-value="bi bi-bucket-fill" data-search="bucket-fill">
            <i class="bi bi-bucket-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bucket-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bug' ? 'selected' : '' }}"
             data-value="bi bi-bug" data-search="bug">
            <i class="bi bi-bug" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bug</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bug-fill' ? 'selected' : '' }}"
             data-value="bi bi-bug-fill" data-search="bug-fill">
            <i class="bi bi-bug-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bug-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building' ? 'selected' : '' }}"
             data-value="bi bi-building" data-search="building">
            <i class="bi bi-building" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-add' ? 'selected' : '' }}"
             data-value="bi bi-building-add" data-search="building-add">
            <i class="bi bi-building-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-check' ? 'selected' : '' }}"
             data-value="bi bi-building-check" data-search="building-check">
            <i class="bi bi-building-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-dash' ? 'selected' : '' }}"
             data-value="bi bi-building-dash" data-search="building-dash">
            <i class="bi bi-building-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-down' ? 'selected' : '' }}"
             data-value="bi bi-building-down" data-search="building-down">
            <i class="bi bi-building-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-building-exclamation" data-search="building-exclamation">
            <i class="bi bi-building-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill' ? 'selected' : '' }}"
             data-value="bi bi-building-fill" data-search="building-fill">
            <i class="bi bi-building-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-add' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-add" data-search="building-fill-add">
            <i class="bi bi-building-fill-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-check' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-check" data-search="building-fill-check">
            <i class="bi bi-building-fill-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-dash' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-dash" data-search="building-fill-dash">
            <i class="bi bi-building-fill-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-down' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-down" data-search="building-fill-down">
            <i class="bi bi-building-fill-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-exclamation" data-search="building-fill-exclamation">
            <i class="bi bi-building-fill-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-gear' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-gear" data-search="building-fill-gear">
            <i class="bi bi-building-fill-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-lock' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-lock" data-search="building-fill-lock">
            <i class="bi bi-building-fill-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-slash' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-slash" data-search="building-fill-slash">
            <i class="bi bi-building-fill-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-up' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-up" data-search="building-fill-up">
            <i class="bi bi-building-fill-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-fill-x' ? 'selected' : '' }}"
             data-value="bi bi-building-fill-x" data-search="building-fill-x">
            <i class="bi bi-building-fill-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-fill-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-gear' ? 'selected' : '' }}"
             data-value="bi bi-building-gear" data-search="building-gear">
            <i class="bi bi-building-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-lock' ? 'selected' : '' }}"
             data-value="bi bi-building-lock" data-search="building-lock">
            <i class="bi bi-building-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-slash' ? 'selected' : '' }}"
             data-value="bi bi-building-slash" data-search="building-slash">
            <i class="bi bi-building-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-up' ? 'selected' : '' }}"
             data-value="bi bi-building-up" data-search="building-up">
            <i class="bi bi-building-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-building-x' ? 'selected' : '' }}"
             data-value="bi bi-building-x" data-search="building-x">
            <i class="bi bi-building-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">building-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-buildings' ? 'selected' : '' }}"
             data-value="bi bi-buildings" data-search="buildings">
            <i class="bi bi-buildings" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">buildings</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-buildings-fill' ? 'selected' : '' }}"
             data-value="bi bi-buildings-fill" data-search="buildings-fill">
            <i class="bi bi-buildings-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">buildings-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bullseye' ? 'selected' : '' }}"
             data-value="bi bi-bullseye" data-search="bullseye">
            <i class="bi bi-bullseye" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bullseye</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bus-front' ? 'selected' : '' }}"
             data-value="bi bi-bus-front" data-search="bus-front">
            <i class="bi bi-bus-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bus-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-bus-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-bus-front-fill" data-search="bus-front-fill">
            <i class="bi bi-bus-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">bus-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-c-circle' ? 'selected' : '' }}"
             data-value="bi bi-c-circle" data-search="c-circle">
            <i class="bi bi-c-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">c-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-c-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-c-circle-fill" data-search="c-circle-fill">
            <i class="bi bi-c-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">c-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-c-square' ? 'selected' : '' }}"
             data-value="bi bi-c-square" data-search="c-square">
            <i class="bi bi-c-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">c-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-c-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-c-square-fill" data-search="c-square-fill">
            <i class="bi bi-c-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">c-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cake' ? 'selected' : '' }}"
             data-value="bi bi-cake" data-search="cake">
            <i class="bi bi-cake" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cake</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cake-fill' ? 'selected' : '' }}"
             data-value="bi bi-cake-fill" data-search="cake-fill">
            <i class="bi bi-cake-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cake-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cake2' ? 'selected' : '' }}"
             data-value="bi bi-cake2" data-search="cake2">
            <i class="bi bi-cake2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cake2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cake2-fill' ? 'selected' : '' }}"
             data-value="bi bi-cake2-fill" data-search="cake2-fill">
            <i class="bi bi-cake2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cake2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calculator' ? 'selected' : '' }}"
             data-value="bi bi-calculator" data-search="calculator">
            <i class="bi bi-calculator" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calculator</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calculator-fill' ? 'selected' : '' }}"
             data-value="bi bi-calculator-fill" data-search="calculator-fill">
            <i class="bi bi-calculator-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calculator-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar' ? 'selected' : '' }}"
             data-value="bi bi-calendar" data-search="calendar">
            <i class="bi bi-calendar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-check' ? 'selected' : '' }}"
             data-value="bi bi-calendar-check" data-search="calendar-check">
            <i class="bi bi-calendar-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-check-fill" data-search="calendar-check-fill">
            <i class="bi bi-calendar-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-date' ? 'selected' : '' }}"
             data-value="bi bi-calendar-date" data-search="calendar-date">
            <i class="bi bi-calendar-date" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-date</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-date-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-date-fill" data-search="calendar-date-fill">
            <i class="bi bi-calendar-date-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-date-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-day' ? 'selected' : '' }}"
             data-value="bi bi-calendar-day" data-search="calendar-day">
            <i class="bi bi-calendar-day" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-day</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-day-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-day-fill" data-search="calendar-day-fill">
            <i class="bi bi-calendar-day-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-day-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-event' ? 'selected' : '' }}"
             data-value="bi bi-calendar-event" data-search="calendar-event">
            <i class="bi bi-calendar-event" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-event</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-event-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-event-fill" data-search="calendar-event-fill">
            <i class="bi bi-calendar-event-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-event-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-fill" data-search="calendar-fill">
            <i class="bi bi-calendar-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-heart' ? 'selected' : '' }}"
             data-value="bi bi-calendar-heart" data-search="calendar-heart">
            <i class="bi bi-calendar-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-heart-fill" data-search="calendar-heart-fill">
            <i class="bi bi-calendar-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-minus' ? 'selected' : '' }}"
             data-value="bi bi-calendar-minus" data-search="calendar-minus">
            <i class="bi bi-calendar-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-minus-fill" data-search="calendar-minus-fill">
            <i class="bi bi-calendar-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-month' ? 'selected' : '' }}"
             data-value="bi bi-calendar-month" data-search="calendar-month">
            <i class="bi bi-calendar-month" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-month</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-month-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-month-fill" data-search="calendar-month-fill">
            <i class="bi bi-calendar-month-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-month-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-plus' ? 'selected' : '' }}"
             data-value="bi bi-calendar-plus" data-search="calendar-plus">
            <i class="bi bi-calendar-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-plus-fill" data-search="calendar-plus-fill">
            <i class="bi bi-calendar-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-range' ? 'selected' : '' }}"
             data-value="bi bi-calendar-range" data-search="calendar-range">
            <i class="bi bi-calendar-range" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-range</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-range-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-range-fill" data-search="calendar-range-fill">
            <i class="bi bi-calendar-range-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-range-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-week' ? 'selected' : '' }}"
             data-value="bi bi-calendar-week" data-search="calendar-week">
            <i class="bi bi-calendar-week" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-week</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-week-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-week-fill" data-search="calendar-week-fill">
            <i class="bi bi-calendar-week-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-week-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-x' ? 'selected' : '' }}"
             data-value="bi bi-calendar-x" data-search="calendar-x">
            <i class="bi bi-calendar-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar-x-fill" data-search="calendar-x-fill">
            <i class="bi bi-calendar-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2' ? 'selected' : '' }}"
             data-value="bi bi-calendar2" data-search="calendar2">
            <i class="bi bi-calendar2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-check' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-check" data-search="calendar2-check">
            <i class="bi bi-calendar2-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-check-fill" data-search="calendar2-check-fill">
            <i class="bi bi-calendar2-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-date' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-date" data-search="calendar2-date">
            <i class="bi bi-calendar2-date" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-date</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-date-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-date-fill" data-search="calendar2-date-fill">
            <i class="bi bi-calendar2-date-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-date-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-day' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-day" data-search="calendar2-day">
            <i class="bi bi-calendar2-day" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-day</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-day-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-day-fill" data-search="calendar2-day-fill">
            <i class="bi bi-calendar2-day-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-day-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-event' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-event" data-search="calendar2-event">
            <i class="bi bi-calendar2-event" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-event</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-event-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-event-fill" data-search="calendar2-event-fill">
            <i class="bi bi-calendar2-event-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-event-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-fill" data-search="calendar2-fill">
            <i class="bi bi-calendar2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-heart' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-heart" data-search="calendar2-heart">
            <i class="bi bi-calendar2-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-heart-fill" data-search="calendar2-heart-fill">
            <i class="bi bi-calendar2-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-minus' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-minus" data-search="calendar2-minus">
            <i class="bi bi-calendar2-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-minus-fill" data-search="calendar2-minus-fill">
            <i class="bi bi-calendar2-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-month' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-month" data-search="calendar2-month">
            <i class="bi bi-calendar2-month" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-month</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-month-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-month-fill" data-search="calendar2-month-fill">
            <i class="bi bi-calendar2-month-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-month-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-plus' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-plus" data-search="calendar2-plus">
            <i class="bi bi-calendar2-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-plus-fill" data-search="calendar2-plus-fill">
            <i class="bi bi-calendar2-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-range' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-range" data-search="calendar2-range">
            <i class="bi bi-calendar2-range" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-range</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-range-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-range-fill" data-search="calendar2-range-fill">
            <i class="bi bi-calendar2-range-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-range-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-week' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-week" data-search="calendar2-week">
            <i class="bi bi-calendar2-week" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-week</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-week-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-week-fill" data-search="calendar2-week-fill">
            <i class="bi bi-calendar2-week-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-week-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-x' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-x" data-search="calendar2-x">
            <i class="bi bi-calendar2-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar2-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar2-x-fill" data-search="calendar2-x-fill">
            <i class="bi bi-calendar2-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar2-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3' ? 'selected' : '' }}"
             data-value="bi bi-calendar3" data-search="calendar3">
            <i class="bi bi-calendar3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-event' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-event" data-search="calendar3-event">
            <i class="bi bi-calendar3-event" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-event</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-event-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-event-fill" data-search="calendar3-event-fill">
            <i class="bi bi-calendar3-event-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-event-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-fill" data-search="calendar3-fill">
            <i class="bi bi-calendar3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-range' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-range" data-search="calendar3-range">
            <i class="bi bi-calendar3-range" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-range</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-range-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-range-fill" data-search="calendar3-range-fill">
            <i class="bi bi-calendar3-range-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-range-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-week' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-week" data-search="calendar3-week">
            <i class="bi bi-calendar3-week" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-week</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar3-week-fill' ? 'selected' : '' }}"
             data-value="bi bi-calendar3-week-fill" data-search="calendar3-week-fill">
            <i class="bi bi-calendar3-week-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar3-week-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar4' ? 'selected' : '' }}"
             data-value="bi bi-calendar4" data-search="calendar4">
            <i class="bi bi-calendar4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar4-event' ? 'selected' : '' }}"
             data-value="bi bi-calendar4-event" data-search="calendar4-event">
            <i class="bi bi-calendar4-event" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar4-event</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar4-range' ? 'selected' : '' }}"
             data-value="bi bi-calendar4-range" data-search="calendar4-range">
            <i class="bi bi-calendar4-range" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar4-range</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-calendar4-week' ? 'selected' : '' }}"
             data-value="bi bi-calendar4-week" data-search="calendar4-week">
            <i class="bi bi-calendar4-week" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">calendar4-week</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera' ? 'selected' : '' }}"
             data-value="bi bi-camera" data-search="camera">
            <i class="bi bi-camera" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-fill' ? 'selected' : '' }}"
             data-value="bi bi-camera-fill" data-search="camera-fill">
            <i class="bi bi-camera-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-reels' ? 'selected' : '' }}"
             data-value="bi bi-camera-reels" data-search="camera-reels">
            <i class="bi bi-camera-reels" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-reels</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-reels-fill' ? 'selected' : '' }}"
             data-value="bi bi-camera-reels-fill" data-search="camera-reels-fill">
            <i class="bi bi-camera-reels-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-reels-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-video' ? 'selected' : '' }}"
             data-value="bi bi-camera-video" data-search="camera-video">
            <i class="bi bi-camera-video" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-video</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-video-fill' ? 'selected' : '' }}"
             data-value="bi bi-camera-video-fill" data-search="camera-video-fill">
            <i class="bi bi-camera-video-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-video-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-video-off' ? 'selected' : '' }}"
             data-value="bi bi-camera-video-off" data-search="camera-video-off">
            <i class="bi bi-camera-video-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-video-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera-video-off-fill' ? 'selected' : '' }}"
             data-value="bi bi-camera-video-off-fill" data-search="camera-video-off-fill">
            <i class="bi bi-camera-video-off-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera-video-off-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-camera2' ? 'selected' : '' }}"
             data-value="bi bi-camera2" data-search="camera2">
            <i class="bi bi-camera2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">camera2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-capslock' ? 'selected' : '' }}"
             data-value="bi bi-capslock" data-search="capslock">
            <i class="bi bi-capslock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">capslock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-capslock-fill' ? 'selected' : '' }}"
             data-value="bi bi-capslock-fill" data-search="capslock-fill">
            <i class="bi bi-capslock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">capslock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-capsule' ? 'selected' : '' }}"
             data-value="bi bi-capsule" data-search="capsule">
            <i class="bi bi-capsule" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">capsule</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-capsule-pill' ? 'selected' : '' }}"
             data-value="bi bi-capsule-pill" data-search="capsule-pill">
            <i class="bi bi-capsule-pill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">capsule-pill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-car-front' ? 'selected' : '' }}"
             data-value="bi bi-car-front" data-search="car-front">
            <i class="bi bi-car-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">car-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-car-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-car-front-fill" data-search="car-front-fill">
            <i class="bi bi-car-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">car-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-card-checklist' ? 'selected' : '' }}"
             data-value="bi bi-card-checklist" data-search="card-checklist">
            <i class="bi bi-card-checklist" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">card-checklist</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-card-heading' ? 'selected' : '' }}"
             data-value="bi bi-card-heading" data-search="card-heading">
            <i class="bi bi-card-heading" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">card-heading</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-card-image' ? 'selected' : '' }}"
             data-value="bi bi-card-image" data-search="card-image">
            <i class="bi bi-card-image" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">card-image</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-card-list' ? 'selected' : '' }}"
             data-value="bi bi-card-list" data-search="card-list">
            <i class="bi bi-card-list" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">card-list</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-card-text' ? 'selected' : '' }}"
             data-value="bi bi-card-text" data-search="card-text">
            <i class="bi bi-card-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">card-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-down' ? 'selected' : '' }}"
             data-value="bi bi-caret-down" data-search="caret-down">
            <i class="bi bi-caret-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-down-fill" data-search="caret-down-fill">
            <i class="bi bi-caret-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-down-square' ? 'selected' : '' }}"
             data-value="bi bi-caret-down-square" data-search="caret-down-square">
            <i class="bi bi-caret-down-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-down-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-down-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-down-square-fill" data-search="caret-down-square-fill">
            <i class="bi bi-caret-down-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-down-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-left' ? 'selected' : '' }}"
             data-value="bi bi-caret-left" data-search="caret-left">
            <i class="bi bi-caret-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-left-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-left-fill" data-search="caret-left-fill">
            <i class="bi bi-caret-left-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-left-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-left-square' ? 'selected' : '' }}"
             data-value="bi bi-caret-left-square" data-search="caret-left-square">
            <i class="bi bi-caret-left-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-left-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-left-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-left-square-fill" data-search="caret-left-square-fill">
            <i class="bi bi-caret-left-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-left-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-right' ? 'selected' : '' }}"
             data-value="bi bi-caret-right" data-search="caret-right">
            <i class="bi bi-caret-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-right-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-right-fill" data-search="caret-right-fill">
            <i class="bi bi-caret-right-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-right-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-right-square' ? 'selected' : '' }}"
             data-value="bi bi-caret-right-square" data-search="caret-right-square">
            <i class="bi bi-caret-right-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-right-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-right-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-right-square-fill" data-search="caret-right-square-fill">
            <i class="bi bi-caret-right-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-right-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-up' ? 'selected' : '' }}"
             data-value="bi bi-caret-up" data-search="caret-up">
            <i class="bi bi-caret-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-up-fill" data-search="caret-up-fill">
            <i class="bi bi-caret-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-up-square' ? 'selected' : '' }}"
             data-value="bi bi-caret-up-square" data-search="caret-up-square">
            <i class="bi bi-caret-up-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-up-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-caret-up-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-caret-up-square-fill" data-search="caret-up-square-fill">
            <i class="bi bi-caret-up-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">caret-up-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart' ? 'selected' : '' }}"
             data-value="bi bi-cart" data-search="cart">
            <i class="bi bi-cart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-check' ? 'selected' : '' }}"
             data-value="bi bi-cart-check" data-search="cart-check">
            <i class="bi bi-cart-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-cart-check-fill" data-search="cart-check-fill">
            <i class="bi bi-cart-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-dash' ? 'selected' : '' }}"
             data-value="bi bi-cart-dash" data-search="cart-dash">
            <i class="bi bi-cart-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-cart-dash-fill" data-search="cart-dash-fill">
            <i class="bi bi-cart-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-fill' ? 'selected' : '' }}"
             data-value="bi bi-cart-fill" data-search="cart-fill">
            <i class="bi bi-cart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-plus' ? 'selected' : '' }}"
             data-value="bi bi-cart-plus" data-search="cart-plus">
            <i class="bi bi-cart-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-cart-plus-fill" data-search="cart-plus-fill">
            <i class="bi bi-cart-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-x' ? 'selected' : '' }}"
             data-value="bi bi-cart-x" data-search="cart-x">
            <i class="bi bi-cart-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-cart-x-fill" data-search="cart-x-fill">
            <i class="bi bi-cart-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart2' ? 'selected' : '' }}"
             data-value="bi bi-cart2" data-search="cart2">
            <i class="bi bi-cart2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart3' ? 'selected' : '' }}"
             data-value="bi bi-cart3" data-search="cart3">
            <i class="bi bi-cart3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cart4' ? 'selected' : '' }}"
             data-value="bi bi-cart4" data-search="cart4">
            <i class="bi bi-cart4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cart4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cash' ? 'selected' : '' }}"
             data-value="bi bi-cash" data-search="cash">
            <i class="bi bi-cash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cash-coin' ? 'selected' : '' }}"
             data-value="bi bi-cash-coin" data-search="cash-coin">
            <i class="bi bi-cash-coin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cash-coin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cash-stack' ? 'selected' : '' }}"
             data-value="bi bi-cash-stack" data-search="cash-stack">
            <i class="bi bi-cash-stack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cash-stack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cassette' ? 'selected' : '' }}"
             data-value="bi bi-cassette" data-search="cassette">
            <i class="bi bi-cassette" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cassette</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cassette-fill' ? 'selected' : '' }}"
             data-value="bi bi-cassette-fill" data-search="cassette-fill">
            <i class="bi bi-cassette-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cassette-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cast' ? 'selected' : '' }}"
             data-value="bi bi-cast" data-search="cast">
            <i class="bi bi-cast" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cast</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cc-circle' ? 'selected' : '' }}"
             data-value="bi bi-cc-circle" data-search="cc-circle">
            <i class="bi bi-cc-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cc-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cc-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-cc-circle-fill" data-search="cc-circle-fill">
            <i class="bi bi-cc-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cc-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cc-square' ? 'selected' : '' }}"
             data-value="bi bi-cc-square" data-search="cc-square">
            <i class="bi bi-cc-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cc-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cc-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-cc-square-fill" data-search="cc-square-fill">
            <i class="bi bi-cc-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cc-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat' ? 'selected' : '' }}"
             data-value="bi bi-chat" data-search="chat">
            <i class="bi bi-chat" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-dots' ? 'selected' : '' }}"
             data-value="bi bi-chat-dots" data-search="chat-dots">
            <i class="bi bi-chat-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-dots</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-dots-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-dots-fill" data-search="chat-dots-fill">
            <i class="bi bi-chat-dots-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-dots-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-fill" data-search="chat-fill">
            <i class="bi bi-chat-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-heart' ? 'selected' : '' }}"
             data-value="bi bi-chat-heart" data-search="chat-heart">
            <i class="bi bi-chat-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-heart-fill" data-search="chat-heart-fill">
            <i class="bi bi-chat-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left' ? 'selected' : '' }}"
             data-value="bi bi-chat-left" data-search="chat-left">
            <i class="bi bi-chat-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-dots' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-dots" data-search="chat-left-dots">
            <i class="bi bi-chat-left-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-dots</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-dots-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-dots-fill" data-search="chat-left-dots-fill">
            <i class="bi bi-chat-left-dots-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-dots-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-fill" data-search="chat-left-fill">
            <i class="bi bi-chat-left-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-heart' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-heart" data-search="chat-left-heart">
            <i class="bi bi-chat-left-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-heart-fill" data-search="chat-left-heart-fill">
            <i class="bi bi-chat-left-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-quote' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-quote" data-search="chat-left-quote">
            <i class="bi bi-chat-left-quote" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-quote</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-quote-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-quote-fill" data-search="chat-left-quote-fill">
            <i class="bi bi-chat-left-quote-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-quote-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-text' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-text" data-search="chat-left-text">
            <i class="bi bi-chat-left-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-left-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-left-text-fill" data-search="chat-left-text-fill">
            <i class="bi bi-chat-left-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-left-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-quote' ? 'selected' : '' }}"
             data-value="bi bi-chat-quote" data-search="chat-quote">
            <i class="bi bi-chat-quote" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-quote</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-quote-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-quote-fill" data-search="chat-quote-fill">
            <i class="bi bi-chat-quote-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-quote-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right' ? 'selected' : '' }}"
             data-value="bi bi-chat-right" data-search="chat-right">
            <i class="bi bi-chat-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-dots' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-dots" data-search="chat-right-dots">
            <i class="bi bi-chat-right-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-dots</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-dots-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-dots-fill" data-search="chat-right-dots-fill">
            <i class="bi bi-chat-right-dots-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-dots-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-fill" data-search="chat-right-fill">
            <i class="bi bi-chat-right-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-heart' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-heart" data-search="chat-right-heart">
            <i class="bi bi-chat-right-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-heart-fill" data-search="chat-right-heart-fill">
            <i class="bi bi-chat-right-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-quote' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-quote" data-search="chat-right-quote">
            <i class="bi bi-chat-right-quote" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-quote</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-quote-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-quote-fill" data-search="chat-right-quote-fill">
            <i class="bi bi-chat-right-quote-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-quote-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-text' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-text" data-search="chat-right-text">
            <i class="bi bi-chat-right-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-right-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-right-text-fill" data-search="chat-right-text-fill">
            <i class="bi bi-chat-right-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-right-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square' ? 'selected' : '' }}"
             data-value="bi bi-chat-square" data-search="chat-square">
            <i class="bi bi-chat-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-dots' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-dots" data-search="chat-square-dots">
            <i class="bi bi-chat-square-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-dots</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-dots-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-dots-fill" data-search="chat-square-dots-fill">
            <i class="bi bi-chat-square-dots-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-dots-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-fill" data-search="chat-square-fill">
            <i class="bi bi-chat-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-heart' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-heart" data-search="chat-square-heart">
            <i class="bi bi-chat-square-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-heart-fill" data-search="chat-square-heart-fill">
            <i class="bi bi-chat-square-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-quote' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-quote" data-search="chat-square-quote">
            <i class="bi bi-chat-square-quote" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-quote</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-quote-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-quote-fill" data-search="chat-square-quote-fill">
            <i class="bi bi-chat-square-quote-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-quote-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-text' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-text" data-search="chat-square-text">
            <i class="bi bi-chat-square-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-square-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-square-text-fill" data-search="chat-square-text-fill">
            <i class="bi bi-chat-square-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-square-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-text' ? 'selected' : '' }}"
             data-value="bi bi-chat-text" data-search="chat-text">
            <i class="bi bi-chat-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chat-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-chat-text-fill" data-search="chat-text-fill">
            <i class="bi bi-chat-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chat-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check' ? 'selected' : '' }}"
             data-value="bi bi-check" data-search="check">
            <i class="bi bi-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-all' ? 'selected' : '' }}"
             data-value="bi bi-check-all" data-search="check-all">
            <i class="bi bi-check-all" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-all</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-circle' ? 'selected' : '' }}"
             data-value="bi bi-check-circle" data-search="check-circle">
            <i class="bi bi-check-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-check-circle-fill" data-search="check-circle-fill">
            <i class="bi bi-check-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-lg' ? 'selected' : '' }}"
             data-value="bi bi-check-lg" data-search="check-lg">
            <i class="bi bi-check-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-square' ? 'selected' : '' }}"
             data-value="bi bi-check-square" data-search="check-square">
            <i class="bi bi-check-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-check-square-fill" data-search="check-square-fill">
            <i class="bi bi-check-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check2' ? 'selected' : '' }}"
             data-value="bi bi-check2" data-search="check2">
            <i class="bi bi-check2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check2-all' ? 'selected' : '' }}"
             data-value="bi bi-check2-all" data-search="check2-all">
            <i class="bi bi-check2-all" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check2-all</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check2-circle' ? 'selected' : '' }}"
             data-value="bi bi-check2-circle" data-search="check2-circle">
            <i class="bi bi-check2-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check2-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-check2-square' ? 'selected' : '' }}"
             data-value="bi bi-check2-square" data-search="check2-square">
            <i class="bi bi-check2-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">check2-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-contract' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-contract" data-search="chevron-bar-contract">
            <i class="bi bi-chevron-bar-contract" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-contract</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-down' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-down" data-search="chevron-bar-down">
            <i class="bi bi-chevron-bar-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-expand' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-expand" data-search="chevron-bar-expand">
            <i class="bi bi-chevron-bar-expand" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-expand</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-left' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-left" data-search="chevron-bar-left">
            <i class="bi bi-chevron-bar-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-right' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-right" data-search="chevron-bar-right">
            <i class="bi bi-chevron-bar-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-bar-up' ? 'selected' : '' }}"
             data-value="bi bi-chevron-bar-up" data-search="chevron-bar-up">
            <i class="bi bi-chevron-bar-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-bar-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-compact-down' ? 'selected' : '' }}"
             data-value="bi bi-chevron-compact-down" data-search="chevron-compact-down">
            <i class="bi bi-chevron-compact-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-compact-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-compact-left' ? 'selected' : '' }}"
             data-value="bi bi-chevron-compact-left" data-search="chevron-compact-left">
            <i class="bi bi-chevron-compact-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-compact-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-compact-right' ? 'selected' : '' }}"
             data-value="bi bi-chevron-compact-right" data-search="chevron-compact-right">
            <i class="bi bi-chevron-compact-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-compact-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-compact-up' ? 'selected' : '' }}"
             data-value="bi bi-chevron-compact-up" data-search="chevron-compact-up">
            <i class="bi bi-chevron-compact-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-compact-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-contract' ? 'selected' : '' }}"
             data-value="bi bi-chevron-contract" data-search="chevron-contract">
            <i class="bi bi-chevron-contract" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-contract</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-double-down' ? 'selected' : '' }}"
             data-value="bi bi-chevron-double-down" data-search="chevron-double-down">
            <i class="bi bi-chevron-double-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-double-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-double-left' ? 'selected' : '' }}"
             data-value="bi bi-chevron-double-left" data-search="chevron-double-left">
            <i class="bi bi-chevron-double-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-double-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-double-right' ? 'selected' : '' }}"
             data-value="bi bi-chevron-double-right" data-search="chevron-double-right">
            <i class="bi bi-chevron-double-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-double-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-double-up' ? 'selected' : '' }}"
             data-value="bi bi-chevron-double-up" data-search="chevron-double-up">
            <i class="bi bi-chevron-double-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-double-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-down' ? 'selected' : '' }}"
             data-value="bi bi-chevron-down" data-search="chevron-down">
            <i class="bi bi-chevron-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-expand' ? 'selected' : '' }}"
             data-value="bi bi-chevron-expand" data-search="chevron-expand">
            <i class="bi bi-chevron-expand" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-expand</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-left' ? 'selected' : '' }}"
             data-value="bi bi-chevron-left" data-search="chevron-left">
            <i class="bi bi-chevron-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-right' ? 'selected' : '' }}"
             data-value="bi bi-chevron-right" data-search="chevron-right">
            <i class="bi bi-chevron-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-chevron-up' ? 'selected' : '' }}"
             data-value="bi bi-chevron-up" data-search="chevron-up">
            <i class="bi bi-chevron-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">chevron-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-circle' ? 'selected' : '' }}"
             data-value="bi bi-circle" data-search="circle">
            <i class="bi bi-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-circle-fill" data-search="circle-fill">
            <i class="bi bi-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-circle-half' ? 'selected' : '' }}"
             data-value="bi bi-circle-half" data-search="circle-half">
            <i class="bi bi-circle-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">circle-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-circle-square' ? 'selected' : '' }}"
             data-value="bi bi-circle-square" data-search="circle-square">
            <i class="bi bi-circle-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">circle-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-claude' ? 'selected' : '' }}"
             data-value="bi bi-claude" data-search="claude">
            <i class="bi bi-claude" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">claude</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard' ? 'selected' : '' }}"
             data-value="bi bi-clipboard" data-search="clipboard">
            <i class="bi bi-clipboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-check' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-check" data-search="clipboard-check">
            <i class="bi bi-clipboard-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-check-fill" data-search="clipboard-check-fill">
            <i class="bi bi-clipboard-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-data' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-data" data-search="clipboard-data">
            <i class="bi bi-clipboard-data" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-data</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-data-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-data-fill" data-search="clipboard-data-fill">
            <i class="bi bi-clipboard-data-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-data-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-fill" data-search="clipboard-fill">
            <i class="bi bi-clipboard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-heart' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-heart" data-search="clipboard-heart">
            <i class="bi bi-clipboard-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-heart-fill" data-search="clipboard-heart-fill">
            <i class="bi bi-clipboard-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-minus' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-minus" data-search="clipboard-minus">
            <i class="bi bi-clipboard-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-minus-fill" data-search="clipboard-minus-fill">
            <i class="bi bi-clipboard-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-plus' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-plus" data-search="clipboard-plus">
            <i class="bi bi-clipboard-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-plus-fill" data-search="clipboard-plus-fill">
            <i class="bi bi-clipboard-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-pulse' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-pulse" data-search="clipboard-pulse">
            <i class="bi bi-clipboard-pulse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-pulse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-x' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-x" data-search="clipboard-x">
            <i class="bi bi-clipboard-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard-x-fill" data-search="clipboard-x-fill">
            <i class="bi bi-clipboard-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2" data-search="clipboard2">
            <i class="bi bi-clipboard2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-check' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-check" data-search="clipboard2-check">
            <i class="bi bi-clipboard2-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-check-fill" data-search="clipboard2-check-fill">
            <i class="bi bi-clipboard2-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-data' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-data" data-search="clipboard2-data">
            <i class="bi bi-clipboard2-data" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-data</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-data-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-data-fill" data-search="clipboard2-data-fill">
            <i class="bi bi-clipboard2-data-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-data-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-fill" data-search="clipboard2-fill">
            <i class="bi bi-clipboard2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-heart' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-heart" data-search="clipboard2-heart">
            <i class="bi bi-clipboard2-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-heart-fill" data-search="clipboard2-heart-fill">
            <i class="bi bi-clipboard2-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-minus' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-minus" data-search="clipboard2-minus">
            <i class="bi bi-clipboard2-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-minus-fill" data-search="clipboard2-minus-fill">
            <i class="bi bi-clipboard2-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-plus' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-plus" data-search="clipboard2-plus">
            <i class="bi bi-clipboard2-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-plus-fill" data-search="clipboard2-plus-fill">
            <i class="bi bi-clipboard2-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-pulse' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-pulse" data-search="clipboard2-pulse">
            <i class="bi bi-clipboard2-pulse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-pulse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-pulse-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-pulse-fill" data-search="clipboard2-pulse-fill">
            <i class="bi bi-clipboard2-pulse-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-pulse-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-x' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-x" data-search="clipboard2-x">
            <i class="bi bi-clipboard2-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clipboard2-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-clipboard2-x-fill" data-search="clipboard2-x-fill">
            <i class="bi bi-clipboard2-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clipboard2-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clock' ? 'selected' : '' }}"
             data-value="bi bi-clock" data-search="clock">
            <i class="bi bi-clock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clock-fill' ? 'selected' : '' }}"
             data-value="bi bi-clock-fill" data-search="clock-fill">
            <i class="bi bi-clock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clock-history' ? 'selected' : '' }}"
             data-value="bi bi-clock-history" data-search="clock-history">
            <i class="bi bi-clock-history" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clock-history</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud' ? 'selected' : '' }}"
             data-value="bi bi-cloud" data-search="cloud">
            <i class="bi bi-cloud" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-cloud-arrow-down" data-search="cloud-arrow-down">
            <i class="bi bi-cloud-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-arrow-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-arrow-down-fill" data-search="cloud-arrow-down-fill">
            <i class="bi bi-cloud-arrow-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-arrow-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-cloud-arrow-up" data-search="cloud-arrow-up">
            <i class="bi bi-cloud-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-arrow-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-arrow-up-fill" data-search="cloud-arrow-up-fill">
            <i class="bi bi-cloud-arrow-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-arrow-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-check' ? 'selected' : '' }}"
             data-value="bi bi-cloud-check" data-search="cloud-check">
            <i class="bi bi-cloud-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-check-fill" data-search="cloud-check-fill">
            <i class="bi bi-cloud-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-download' ? 'selected' : '' }}"
             data-value="bi bi-cloud-download" data-search="cloud-download">
            <i class="bi bi-cloud-download" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-download</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-download-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-download-fill" data-search="cloud-download-fill">
            <i class="bi bi-cloud-download-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-download-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-drizzle' ? 'selected' : '' }}"
             data-value="bi bi-cloud-drizzle" data-search="cloud-drizzle">
            <i class="bi bi-cloud-drizzle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-drizzle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-drizzle-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-drizzle-fill" data-search="cloud-drizzle-fill">
            <i class="bi bi-cloud-drizzle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-drizzle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-fill" data-search="cloud-fill">
            <i class="bi bi-cloud-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-fog' ? 'selected' : '' }}"
             data-value="bi bi-cloud-fog" data-search="cloud-fog">
            <i class="bi bi-cloud-fog" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-fog</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-fog-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-fog-fill" data-search="cloud-fog-fill">
            <i class="bi bi-cloud-fog-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-fog-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-fog2' ? 'selected' : '' }}"
             data-value="bi bi-cloud-fog2" data-search="cloud-fog2">
            <i class="bi bi-cloud-fog2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-fog2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-fog2-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-fog2-fill" data-search="cloud-fog2-fill">
            <i class="bi bi-cloud-fog2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-fog2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-hail' ? 'selected' : '' }}"
             data-value="bi bi-cloud-hail" data-search="cloud-hail">
            <i class="bi bi-cloud-hail" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-hail</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-hail-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-hail-fill" data-search="cloud-hail-fill">
            <i class="bi bi-cloud-hail-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-hail-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-haze' ? 'selected' : '' }}"
             data-value="bi bi-cloud-haze" data-search="cloud-haze">
            <i class="bi bi-cloud-haze" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-haze</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-haze-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-haze-fill" data-search="cloud-haze-fill">
            <i class="bi bi-cloud-haze-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-haze-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-haze2' ? 'selected' : '' }}"
             data-value="bi bi-cloud-haze2" data-search="cloud-haze2">
            <i class="bi bi-cloud-haze2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-haze2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-haze2-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-haze2-fill" data-search="cloud-haze2-fill">
            <i class="bi bi-cloud-haze2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-haze2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-lightning' ? 'selected' : '' }}"
             data-value="bi bi-cloud-lightning" data-search="cloud-lightning">
            <i class="bi bi-cloud-lightning" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-lightning</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-lightning-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-lightning-fill" data-search="cloud-lightning-fill">
            <i class="bi bi-cloud-lightning-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-lightning-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-lightning-rain' ? 'selected' : '' }}"
             data-value="bi bi-cloud-lightning-rain" data-search="cloud-lightning-rain">
            <i class="bi bi-cloud-lightning-rain" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-lightning-rain</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-lightning-rain-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-lightning-rain-fill" data-search="cloud-lightning-rain-fill">
            <i class="bi bi-cloud-lightning-rain-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-lightning-rain-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-minus' ? 'selected' : '' }}"
             data-value="bi bi-cloud-minus" data-search="cloud-minus">
            <i class="bi bi-cloud-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-minus-fill" data-search="cloud-minus-fill">
            <i class="bi bi-cloud-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-moon' ? 'selected' : '' }}"
             data-value="bi bi-cloud-moon" data-search="cloud-moon">
            <i class="bi bi-cloud-moon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-moon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-moon-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-moon-fill" data-search="cloud-moon-fill">
            <i class="bi bi-cloud-moon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-moon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-plus' ? 'selected' : '' }}"
             data-value="bi bi-cloud-plus" data-search="cloud-plus">
            <i class="bi bi-cloud-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-plus-fill" data-search="cloud-plus-fill">
            <i class="bi bi-cloud-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-rain' ? 'selected' : '' }}"
             data-value="bi bi-cloud-rain" data-search="cloud-rain">
            <i class="bi bi-cloud-rain" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-rain</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-rain-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-rain-fill" data-search="cloud-rain-fill">
            <i class="bi bi-cloud-rain-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-rain-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-rain-heavy' ? 'selected' : '' }}"
             data-value="bi bi-cloud-rain-heavy" data-search="cloud-rain-heavy">
            <i class="bi bi-cloud-rain-heavy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-rain-heavy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-rain-heavy-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-rain-heavy-fill" data-search="cloud-rain-heavy-fill">
            <i class="bi bi-cloud-rain-heavy-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-rain-heavy-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-slash' ? 'selected' : '' }}"
             data-value="bi bi-cloud-slash" data-search="cloud-slash">
            <i class="bi bi-cloud-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-slash-fill" data-search="cloud-slash-fill">
            <i class="bi bi-cloud-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-sleet' ? 'selected' : '' }}"
             data-value="bi bi-cloud-sleet" data-search="cloud-sleet">
            <i class="bi bi-cloud-sleet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-sleet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-sleet-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-sleet-fill" data-search="cloud-sleet-fill">
            <i class="bi bi-cloud-sleet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-sleet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-snow' ? 'selected' : '' }}"
             data-value="bi bi-cloud-snow" data-search="cloud-snow">
            <i class="bi bi-cloud-snow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-snow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-snow-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-snow-fill" data-search="cloud-snow-fill">
            <i class="bi bi-cloud-snow-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-snow-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-sun' ? 'selected' : '' }}"
             data-value="bi bi-cloud-sun" data-search="cloud-sun">
            <i class="bi bi-cloud-sun" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-sun</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-sun-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-sun-fill" data-search="cloud-sun-fill">
            <i class="bi bi-cloud-sun-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-sun-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-upload' ? 'selected' : '' }}"
             data-value="bi bi-cloud-upload" data-search="cloud-upload">
            <i class="bi bi-cloud-upload" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-upload</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloud-upload-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloud-upload-fill" data-search="cloud-upload-fill">
            <i class="bi bi-cloud-upload-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloud-upload-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clouds' ? 'selected' : '' }}"
             data-value="bi bi-clouds" data-search="clouds">
            <i class="bi bi-clouds" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clouds</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-clouds-fill' ? 'selected' : '' }}"
             data-value="bi bi-clouds-fill" data-search="clouds-fill">
            <i class="bi bi-clouds-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">clouds-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloudy' ? 'selected' : '' }}"
             data-value="bi bi-cloudy" data-search="cloudy">
            <i class="bi bi-cloudy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloudy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cloudy-fill' ? 'selected' : '' }}"
             data-value="bi bi-cloudy-fill" data-search="cloudy-fill">
            <i class="bi bi-cloudy-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cloudy-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-code' ? 'selected' : '' }}"
             data-value="bi bi-code" data-search="code">
            <i class="bi bi-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">code</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-code-slash' ? 'selected' : '' }}"
             data-value="bi bi-code-slash" data-search="code-slash">
            <i class="bi bi-code-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">code-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-code-square' ? 'selected' : '' }}"
             data-value="bi bi-code-square" data-search="code-square">
            <i class="bi bi-code-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">code-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-coin' ? 'selected' : '' }}"
             data-value="bi bi-coin" data-search="coin">
            <i class="bi bi-coin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">coin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-collection' ? 'selected' : '' }}"
             data-value="bi bi-collection" data-search="collection">
            <i class="bi bi-collection" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">collection</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-collection-fill' ? 'selected' : '' }}"
             data-value="bi bi-collection-fill" data-search="collection-fill">
            <i class="bi bi-collection-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">collection-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-collection-play' ? 'selected' : '' }}"
             data-value="bi bi-collection-play" data-search="collection-play">
            <i class="bi bi-collection-play" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">collection-play</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-collection-play-fill' ? 'selected' : '' }}"
             data-value="bi bi-collection-play-fill" data-search="collection-play-fill">
            <i class="bi bi-collection-play-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">collection-play-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-columns' ? 'selected' : '' }}"
             data-value="bi bi-columns" data-search="columns">
            <i class="bi bi-columns" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">columns</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-columns-gap' ? 'selected' : '' }}"
             data-value="bi bi-columns-gap" data-search="columns-gap">
            <i class="bi bi-columns-gap" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">columns-gap</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-command' ? 'selected' : '' }}"
             data-value="bi bi-command" data-search="command">
            <i class="bi bi-command" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">command</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-compass' ? 'selected' : '' }}"
             data-value="bi bi-compass" data-search="compass">
            <i class="bi bi-compass" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">compass</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-compass-fill' ? 'selected' : '' }}"
             data-value="bi bi-compass-fill" data-search="compass-fill">
            <i class="bi bi-compass-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">compass-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cone' ? 'selected' : '' }}"
             data-value="bi bi-cone" data-search="cone">
            <i class="bi bi-cone" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cone</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cone-striped' ? 'selected' : '' }}"
             data-value="bi bi-cone-striped" data-search="cone-striped">
            <i class="bi bi-cone-striped" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cone-striped</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-controller' ? 'selected' : '' }}"
             data-value="bi bi-controller" data-search="controller">
            <i class="bi bi-controller" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">controller</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cookie' ? 'selected' : '' }}"
             data-value="bi bi-cookie" data-search="cookie">
            <i class="bi bi-cookie" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cookie</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-copy' ? 'selected' : '' }}"
             data-value="bi bi-copy" data-search="copy">
            <i class="bi bi-copy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">copy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cpu' ? 'selected' : '' }}"
             data-value="bi bi-cpu" data-search="cpu">
            <i class="bi bi-cpu" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cpu</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cpu-fill' ? 'selected' : '' }}"
             data-value="bi bi-cpu-fill" data-search="cpu-fill">
            <i class="bi bi-cpu-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cpu-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card' ? 'selected' : '' }}"
             data-value="bi bi-credit-card" data-search="credit-card">
            <i class="bi bi-credit-card" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card-2-back' ? 'selected' : '' }}"
             data-value="bi bi-credit-card-2-back" data-search="credit-card-2-back">
            <i class="bi bi-credit-card-2-back" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card-2-back</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card-2-back-fill' ? 'selected' : '' }}"
             data-value="bi bi-credit-card-2-back-fill" data-search="credit-card-2-back-fill">
            <i class="bi bi-credit-card-2-back-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card-2-back-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card-2-front' ? 'selected' : '' }}"
             data-value="bi bi-credit-card-2-front" data-search="credit-card-2-front">
            <i class="bi bi-credit-card-2-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card-2-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card-2-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-credit-card-2-front-fill" data-search="credit-card-2-front-fill">
            <i class="bi bi-credit-card-2-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card-2-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-credit-card-fill' ? 'selected' : '' }}"
             data-value="bi bi-credit-card-fill" data-search="credit-card-fill">
            <i class="bi bi-credit-card-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">credit-card-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-crop' ? 'selected' : '' }}"
             data-value="bi bi-crop" data-search="crop">
            <i class="bi bi-crop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">crop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-crosshair' ? 'selected' : '' }}"
             data-value="bi bi-crosshair" data-search="crosshair">
            <i class="bi bi-crosshair" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">crosshair</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-crosshair2' ? 'selected' : '' }}"
             data-value="bi bi-crosshair2" data-search="crosshair2">
            <i class="bi bi-crosshair2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">crosshair2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-css' ? 'selected' : '' }}"
             data-value="bi bi-css" data-search="css">
            <i class="bi bi-css" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">css</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cup' ? 'selected' : '' }}"
             data-value="bi bi-cup" data-search="cup">
            <i class="bi bi-cup" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cup</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cup-fill' ? 'selected' : '' }}"
             data-value="bi bi-cup-fill" data-search="cup-fill">
            <i class="bi bi-cup-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cup-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cup-hot' ? 'selected' : '' }}"
             data-value="bi bi-cup-hot" data-search="cup-hot">
            <i class="bi bi-cup-hot" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cup-hot</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cup-hot-fill' ? 'selected' : '' }}"
             data-value="bi bi-cup-hot-fill" data-search="cup-hot-fill">
            <i class="bi bi-cup-hot-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cup-hot-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cup-straw' ? 'selected' : '' }}"
             data-value="bi bi-cup-straw" data-search="cup-straw">
            <i class="bi bi-cup-straw" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cup-straw</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-bitcoin' ? 'selected' : '' }}"
             data-value="bi bi-currency-bitcoin" data-search="currency-bitcoin">
            <i class="bi bi-currency-bitcoin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-bitcoin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-dollar' ? 'selected' : '' }}"
             data-value="bi bi-currency-dollar" data-search="currency-dollar">
            <i class="bi bi-currency-dollar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-dollar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-euro' ? 'selected' : '' }}"
             data-value="bi bi-currency-euro" data-search="currency-euro">
            <i class="bi bi-currency-euro" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-euro</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-exchange' ? 'selected' : '' }}"
             data-value="bi bi-currency-exchange" data-search="currency-exchange">
            <i class="bi bi-currency-exchange" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-exchange</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-pound' ? 'selected' : '' }}"
             data-value="bi bi-currency-pound" data-search="currency-pound">
            <i class="bi bi-currency-pound" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-pound</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-rupee' ? 'selected' : '' }}"
             data-value="bi bi-currency-rupee" data-search="currency-rupee">
            <i class="bi bi-currency-rupee" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-rupee</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-currency-yen' ? 'selected' : '' }}"
             data-value="bi bi-currency-yen" data-search="currency-yen">
            <i class="bi bi-currency-yen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">currency-yen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cursor' ? 'selected' : '' }}"
             data-value="bi bi-cursor" data-search="cursor">
            <i class="bi bi-cursor" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cursor</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cursor-fill' ? 'selected' : '' }}"
             data-value="bi bi-cursor-fill" data-search="cursor-fill">
            <i class="bi bi-cursor-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cursor-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-cursor-text' ? 'selected' : '' }}"
             data-value="bi bi-cursor-text" data-search="cursor-text">
            <i class="bi bi-cursor-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">cursor-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash' ? 'selected' : '' }}"
             data-value="bi bi-dash" data-search="dash">
            <i class="bi bi-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-circle' ? 'selected' : '' }}"
             data-value="bi bi-dash-circle" data-search="dash-circle">
            <i class="bi bi-dash-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-circle-dotted' ? 'selected' : '' }}"
             data-value="bi bi-dash-circle-dotted" data-search="dash-circle-dotted">
            <i class="bi bi-dash-circle-dotted" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-circle-dotted</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-dash-circle-fill" data-search="dash-circle-fill">
            <i class="bi bi-dash-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-lg' ? 'selected' : '' }}"
             data-value="bi bi-dash-lg" data-search="dash-lg">
            <i class="bi bi-dash-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-square' ? 'selected' : '' }}"
             data-value="bi bi-dash-square" data-search="dash-square">
            <i class="bi bi-dash-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-square-dotted' ? 'selected' : '' }}"
             data-value="bi bi-dash-square-dotted" data-search="dash-square-dotted">
            <i class="bi bi-dash-square-dotted" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-square-dotted</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dash-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-dash-square-fill" data-search="dash-square-fill">
            <i class="bi bi-dash-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dash-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database' ? 'selected' : '' }}"
             data-value="bi bi-database" data-search="database">
            <i class="bi bi-database" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-add' ? 'selected' : '' }}"
             data-value="bi bi-database-add" data-search="database-add">
            <i class="bi bi-database-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-check' ? 'selected' : '' }}"
             data-value="bi bi-database-check" data-search="database-check">
            <i class="bi bi-database-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-dash' ? 'selected' : '' }}"
             data-value="bi bi-database-dash" data-search="database-dash">
            <i class="bi bi-database-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-down' ? 'selected' : '' }}"
             data-value="bi bi-database-down" data-search="database-down">
            <i class="bi bi-database-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-database-exclamation" data-search="database-exclamation">
            <i class="bi bi-database-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill' ? 'selected' : '' }}"
             data-value="bi bi-database-fill" data-search="database-fill">
            <i class="bi bi-database-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-add' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-add" data-search="database-fill-add">
            <i class="bi bi-database-fill-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-check' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-check" data-search="database-fill-check">
            <i class="bi bi-database-fill-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-dash' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-dash" data-search="database-fill-dash">
            <i class="bi bi-database-fill-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-down' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-down" data-search="database-fill-down">
            <i class="bi bi-database-fill-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-exclamation" data-search="database-fill-exclamation">
            <i class="bi bi-database-fill-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-gear' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-gear" data-search="database-fill-gear">
            <i class="bi bi-database-fill-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-lock' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-lock" data-search="database-fill-lock">
            <i class="bi bi-database-fill-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-slash' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-slash" data-search="database-fill-slash">
            <i class="bi bi-database-fill-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-up' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-up" data-search="database-fill-up">
            <i class="bi bi-database-fill-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-fill-x' ? 'selected' : '' }}"
             data-value="bi bi-database-fill-x" data-search="database-fill-x">
            <i class="bi bi-database-fill-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-fill-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-gear' ? 'selected' : '' }}"
             data-value="bi bi-database-gear" data-search="database-gear">
            <i class="bi bi-database-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-lock' ? 'selected' : '' }}"
             data-value="bi bi-database-lock" data-search="database-lock">
            <i class="bi bi-database-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-slash' ? 'selected' : '' }}"
             data-value="bi bi-database-slash" data-search="database-slash">
            <i class="bi bi-database-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-up' ? 'selected' : '' }}"
             data-value="bi bi-database-up" data-search="database-up">
            <i class="bi bi-database-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-database-x' ? 'selected' : '' }}"
             data-value="bi bi-database-x" data-search="database-x">
            <i class="bi bi-database-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">database-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-device-hdd' ? 'selected' : '' }}"
             data-value="bi bi-device-hdd" data-search="device-hdd">
            <i class="bi bi-device-hdd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">device-hdd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-device-hdd-fill' ? 'selected' : '' }}"
             data-value="bi bi-device-hdd-fill" data-search="device-hdd-fill">
            <i class="bi bi-device-hdd-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">device-hdd-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-device-ssd' ? 'selected' : '' }}"
             data-value="bi bi-device-ssd" data-search="device-ssd">
            <i class="bi bi-device-ssd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">device-ssd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-device-ssd-fill' ? 'selected' : '' }}"
             data-value="bi bi-device-ssd-fill" data-search="device-ssd-fill">
            <i class="bi bi-device-ssd-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">device-ssd-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diagram-2' ? 'selected' : '' }}"
             data-value="bi bi-diagram-2" data-search="diagram-2">
            <i class="bi bi-diagram-2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diagram-2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diagram-2-fill' ? 'selected' : '' }}"
             data-value="bi bi-diagram-2-fill" data-search="diagram-2-fill">
            <i class="bi bi-diagram-2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diagram-2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diagram-3' ? 'selected' : '' }}"
             data-value="bi bi-diagram-3" data-search="diagram-3">
            <i class="bi bi-diagram-3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diagram-3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diagram-3-fill' ? 'selected' : '' }}"
             data-value="bi bi-diagram-3-fill" data-search="diagram-3-fill">
            <i class="bi bi-diagram-3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diagram-3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diamond' ? 'selected' : '' }}"
             data-value="bi bi-diamond" data-search="diamond">
            <i class="bi bi-diamond" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diamond</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diamond-fill' ? 'selected' : '' }}"
             data-value="bi bi-diamond-fill" data-search="diamond-fill">
            <i class="bi bi-diamond-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diamond-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-diamond-half' ? 'selected' : '' }}"
             data-value="bi bi-diamond-half" data-search="diamond-half">
            <i class="bi bi-diamond-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">diamond-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-1' ? 'selected' : '' }}"
             data-value="bi bi-dice-1" data-search="dice-1">
            <i class="bi bi-dice-1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-1-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-1-fill" data-search="dice-1-fill">
            <i class="bi bi-dice-1-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-1-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-2' ? 'selected' : '' }}"
             data-value="bi bi-dice-2" data-search="dice-2">
            <i class="bi bi-dice-2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-2-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-2-fill" data-search="dice-2-fill">
            <i class="bi bi-dice-2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-3' ? 'selected' : '' }}"
             data-value="bi bi-dice-3" data-search="dice-3">
            <i class="bi bi-dice-3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-3-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-3-fill" data-search="dice-3-fill">
            <i class="bi bi-dice-3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-4' ? 'selected' : '' }}"
             data-value="bi bi-dice-4" data-search="dice-4">
            <i class="bi bi-dice-4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-4-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-4-fill" data-search="dice-4-fill">
            <i class="bi bi-dice-4-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-4-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-5' ? 'selected' : '' }}"
             data-value="bi bi-dice-5" data-search="dice-5">
            <i class="bi bi-dice-5" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-5</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-5-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-5-fill" data-search="dice-5-fill">
            <i class="bi bi-dice-5-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-5-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-6' ? 'selected' : '' }}"
             data-value="bi bi-dice-6" data-search="dice-6">
            <i class="bi bi-dice-6" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-6</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dice-6-fill' ? 'selected' : '' }}"
             data-value="bi bi-dice-6-fill" data-search="dice-6-fill">
            <i class="bi bi-dice-6-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dice-6-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-disc' ? 'selected' : '' }}"
             data-value="bi bi-disc" data-search="disc">
            <i class="bi bi-disc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">disc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-disc-fill' ? 'selected' : '' }}"
             data-value="bi bi-disc-fill" data-search="disc-fill">
            <i class="bi bi-disc-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">disc-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-discord' ? 'selected' : '' }}"
             data-value="bi bi-discord" data-search="discord">
            <i class="bi bi-discord" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">discord</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-display' ? 'selected' : '' }}"
             data-value="bi bi-display" data-search="display">
            <i class="bi bi-display" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">display</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-display-fill' ? 'selected' : '' }}"
             data-value="bi bi-display-fill" data-search="display-fill">
            <i class="bi bi-display-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">display-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-displayport' ? 'selected' : '' }}"
             data-value="bi bi-displayport" data-search="displayport">
            <i class="bi bi-displayport" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">displayport</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-displayport-fill' ? 'selected' : '' }}"
             data-value="bi bi-displayport-fill" data-search="displayport-fill">
            <i class="bi bi-displayport-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">displayport-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-distribute-horizontal' ? 'selected' : '' }}"
             data-value="bi bi-distribute-horizontal" data-search="distribute-horizontal">
            <i class="bi bi-distribute-horizontal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">distribute-horizontal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-distribute-vertical' ? 'selected' : '' }}"
             data-value="bi bi-distribute-vertical" data-search="distribute-vertical">
            <i class="bi bi-distribute-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">distribute-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-door-closed' ? 'selected' : '' }}"
             data-value="bi bi-door-closed" data-search="door-closed">
            <i class="bi bi-door-closed" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">door-closed</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-door-closed-fill' ? 'selected' : '' }}"
             data-value="bi bi-door-closed-fill" data-search="door-closed-fill">
            <i class="bi bi-door-closed-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">door-closed-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-door-open' ? 'selected' : '' }}"
             data-value="bi bi-door-open" data-search="door-open">
            <i class="bi bi-door-open" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">door-open</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-door-open-fill' ? 'selected' : '' }}"
             data-value="bi bi-door-open-fill" data-search="door-open-fill">
            <i class="bi bi-door-open-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">door-open-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dot' ? 'selected' : '' }}"
             data-value="bi bi-dot" data-search="dot">
            <i class="bi bi-dot" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dot</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-download' ? 'selected' : '' }}"
             data-value="bi bi-download" data-search="download">
            <i class="bi bi-download" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">download</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dpad' ? 'selected' : '' }}"
             data-value="bi bi-dpad" data-search="dpad">
            <i class="bi bi-dpad" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dpad</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dpad-fill' ? 'selected' : '' }}"
             data-value="bi bi-dpad-fill" data-search="dpad-fill">
            <i class="bi bi-dpad-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dpad-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dribbble' ? 'selected' : '' }}"
             data-value="bi bi-dribbble" data-search="dribbble">
            <i class="bi bi-dribbble" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dribbble</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-dropbox' ? 'selected' : '' }}"
             data-value="bi bi-dropbox" data-search="dropbox">
            <i class="bi bi-dropbox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">dropbox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-droplet' ? 'selected' : '' }}"
             data-value="bi bi-droplet" data-search="droplet">
            <i class="bi bi-droplet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">droplet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-droplet-fill' ? 'selected' : '' }}"
             data-value="bi bi-droplet-fill" data-search="droplet-fill">
            <i class="bi bi-droplet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">droplet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-droplet-half' ? 'selected' : '' }}"
             data-value="bi bi-droplet-half" data-search="droplet-half">
            <i class="bi bi-droplet-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">droplet-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-duffle' ? 'selected' : '' }}"
             data-value="bi bi-duffle" data-search="duffle">
            <i class="bi bi-duffle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">duffle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-duffle-fill' ? 'selected' : '' }}"
             data-value="bi bi-duffle-fill" data-search="duffle-fill">
            <i class="bi bi-duffle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">duffle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ear' ? 'selected' : '' }}"
             data-value="bi bi-ear" data-search="ear">
            <i class="bi bi-ear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ear-fill' ? 'selected' : '' }}"
             data-value="bi bi-ear-fill" data-search="ear-fill">
            <i class="bi bi-ear-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ear-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-earbuds' ? 'selected' : '' }}"
             data-value="bi bi-earbuds" data-search="earbuds">
            <i class="bi bi-earbuds" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">earbuds</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel' ? 'selected' : '' }}"
             data-value="bi bi-easel" data-search="easel">
            <i class="bi bi-easel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel-fill' ? 'selected' : '' }}"
             data-value="bi bi-easel-fill" data-search="easel-fill">
            <i class="bi bi-easel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel2' ? 'selected' : '' }}"
             data-value="bi bi-easel2" data-search="easel2">
            <i class="bi bi-easel2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel2-fill' ? 'selected' : '' }}"
             data-value="bi bi-easel2-fill" data-search="easel2-fill">
            <i class="bi bi-easel2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel3' ? 'selected' : '' }}"
             data-value="bi bi-easel3" data-search="easel3">
            <i class="bi bi-easel3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-easel3-fill' ? 'selected' : '' }}"
             data-value="bi bi-easel3-fill" data-search="easel3-fill">
            <i class="bi bi-easel3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">easel3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-egg' ? 'selected' : '' }}"
             data-value="bi bi-egg" data-search="egg">
            <i class="bi bi-egg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">egg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-egg-fill' ? 'selected' : '' }}"
             data-value="bi bi-egg-fill" data-search="egg-fill">
            <i class="bi bi-egg-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">egg-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-egg-fried' ? 'selected' : '' }}"
             data-value="bi bi-egg-fried" data-search="egg-fried">
            <i class="bi bi-egg-fried" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">egg-fried</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eject' ? 'selected' : '' }}"
             data-value="bi bi-eject" data-search="eject">
            <i class="bi bi-eject" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eject</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eject-fill' ? 'selected' : '' }}"
             data-value="bi bi-eject-fill" data-search="eject-fill">
            <i class="bi bi-eject-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eject-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-angry' ? 'selected' : '' }}"
             data-value="bi bi-emoji-angry" data-search="emoji-angry">
            <i class="bi bi-emoji-angry" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-angry</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-angry-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-angry-fill" data-search="emoji-angry-fill">
            <i class="bi bi-emoji-angry-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-angry-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-astonished' ? 'selected' : '' }}"
             data-value="bi bi-emoji-astonished" data-search="emoji-astonished">
            <i class="bi bi-emoji-astonished" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-astonished</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-astonished-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-astonished-fill" data-search="emoji-astonished-fill">
            <i class="bi bi-emoji-astonished-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-astonished-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-dizzy' ? 'selected' : '' }}"
             data-value="bi bi-emoji-dizzy" data-search="emoji-dizzy">
            <i class="bi bi-emoji-dizzy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-dizzy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-dizzy-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-dizzy-fill" data-search="emoji-dizzy-fill">
            <i class="bi bi-emoji-dizzy-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-dizzy-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-expressionless' ? 'selected' : '' }}"
             data-value="bi bi-emoji-expressionless" data-search="emoji-expressionless">
            <i class="bi bi-emoji-expressionless" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-expressionless</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-expressionless-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-expressionless-fill" data-search="emoji-expressionless-fill">
            <i class="bi bi-emoji-expressionless-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-expressionless-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-frown' ? 'selected' : '' }}"
             data-value="bi bi-emoji-frown" data-search="emoji-frown">
            <i class="bi bi-emoji-frown" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-frown</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-frown-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-frown-fill" data-search="emoji-frown-fill">
            <i class="bi bi-emoji-frown-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-frown-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-grimace' ? 'selected' : '' }}"
             data-value="bi bi-emoji-grimace" data-search="emoji-grimace">
            <i class="bi bi-emoji-grimace" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-grimace</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-grimace-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-grimace-fill" data-search="emoji-grimace-fill">
            <i class="bi bi-emoji-grimace-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-grimace-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-grin' ? 'selected' : '' }}"
             data-value="bi bi-emoji-grin" data-search="emoji-grin">
            <i class="bi bi-emoji-grin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-grin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-grin-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-grin-fill" data-search="emoji-grin-fill">
            <i class="bi bi-emoji-grin-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-grin-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-heart-eyes' ? 'selected' : '' }}"
             data-value="bi bi-emoji-heart-eyes" data-search="emoji-heart-eyes">
            <i class="bi bi-emoji-heart-eyes" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-heart-eyes</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-heart-eyes-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-heart-eyes-fill" data-search="emoji-heart-eyes-fill">
            <i class="bi bi-emoji-heart-eyes-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-heart-eyes-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-kiss' ? 'selected' : '' }}"
             data-value="bi bi-emoji-kiss" data-search="emoji-kiss">
            <i class="bi bi-emoji-kiss" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-kiss</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-kiss-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-kiss-fill" data-search="emoji-kiss-fill">
            <i class="bi bi-emoji-kiss-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-kiss-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-laughing' ? 'selected' : '' }}"
             data-value="bi bi-emoji-laughing" data-search="emoji-laughing">
            <i class="bi bi-emoji-laughing" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-laughing</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-laughing-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-laughing-fill" data-search="emoji-laughing-fill">
            <i class="bi bi-emoji-laughing-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-laughing-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-neutral' ? 'selected' : '' }}"
             data-value="bi bi-emoji-neutral" data-search="emoji-neutral">
            <i class="bi bi-emoji-neutral" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-neutral</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-neutral-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-neutral-fill" data-search="emoji-neutral-fill">
            <i class="bi bi-emoji-neutral-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-neutral-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-smile' ? 'selected' : '' }}"
             data-value="bi bi-emoji-smile" data-search="emoji-smile">
            <i class="bi bi-emoji-smile" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-smile</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-smile-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-smile-fill" data-search="emoji-smile-fill">
            <i class="bi bi-emoji-smile-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-smile-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-smile-upside-down' ? 'selected' : '' }}"
             data-value="bi bi-emoji-smile-upside-down" data-search="emoji-smile-upside-down">
            <i class="bi bi-emoji-smile-upside-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-smile-upside-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-smile-upside-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-smile-upside-down-fill" data-search="emoji-smile-upside-down-fill">
            <i class="bi bi-emoji-smile-upside-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-smile-upside-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-sunglasses' ? 'selected' : '' }}"
             data-value="bi bi-emoji-sunglasses" data-search="emoji-sunglasses">
            <i class="bi bi-emoji-sunglasses" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-sunglasses</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-sunglasses-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-sunglasses-fill" data-search="emoji-sunglasses-fill">
            <i class="bi bi-emoji-sunglasses-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-sunglasses-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-surprise' ? 'selected' : '' }}"
             data-value="bi bi-emoji-surprise" data-search="emoji-surprise">
            <i class="bi bi-emoji-surprise" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-surprise</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-surprise-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-surprise-fill" data-search="emoji-surprise-fill">
            <i class="bi bi-emoji-surprise-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-surprise-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-tear' ? 'selected' : '' }}"
             data-value="bi bi-emoji-tear" data-search="emoji-tear">
            <i class="bi bi-emoji-tear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-tear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-tear-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-tear-fill" data-search="emoji-tear-fill">
            <i class="bi bi-emoji-tear-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-tear-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-wink' ? 'selected' : '' }}"
             data-value="bi bi-emoji-wink" data-search="emoji-wink">
            <i class="bi bi-emoji-wink" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-wink</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-emoji-wink-fill' ? 'selected' : '' }}"
             data-value="bi bi-emoji-wink-fill" data-search="emoji-wink-fill">
            <i class="bi bi-emoji-wink-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">emoji-wink-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope' ? 'selected' : '' }}"
             data-value="bi bi-envelope" data-search="envelope">
            <i class="bi bi-envelope" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-envelope-arrow-down" data-search="envelope-arrow-down">
            <i class="bi bi-envelope-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-arrow-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-arrow-down-fill" data-search="envelope-arrow-down-fill">
            <i class="bi bi-envelope-arrow-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-arrow-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-envelope-arrow-up" data-search="envelope-arrow-up">
            <i class="bi bi-envelope-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-arrow-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-arrow-up-fill" data-search="envelope-arrow-up-fill">
            <i class="bi bi-envelope-arrow-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-arrow-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-at' ? 'selected' : '' }}"
             data-value="bi bi-envelope-at" data-search="envelope-at">
            <i class="bi bi-envelope-at" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-at</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-at-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-at-fill" data-search="envelope-at-fill">
            <i class="bi bi-envelope-at-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-at-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-check' ? 'selected' : '' }}"
             data-value="bi bi-envelope-check" data-search="envelope-check">
            <i class="bi bi-envelope-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-check-fill" data-search="envelope-check-fill">
            <i class="bi bi-envelope-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-dash' ? 'selected' : '' }}"
             data-value="bi bi-envelope-dash" data-search="envelope-dash">
            <i class="bi bi-envelope-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-dash-fill" data-search="envelope-dash-fill">
            <i class="bi bi-envelope-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-envelope-exclamation" data-search="envelope-exclamation">
            <i class="bi bi-envelope-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-exclamation-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-exclamation-fill" data-search="envelope-exclamation-fill">
            <i class="bi bi-envelope-exclamation-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-exclamation-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-fill" data-search="envelope-fill">
            <i class="bi bi-envelope-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-heart' ? 'selected' : '' }}"
             data-value="bi bi-envelope-heart" data-search="envelope-heart">
            <i class="bi bi-envelope-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-heart-fill" data-search="envelope-heart-fill">
            <i class="bi bi-envelope-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-open' ? 'selected' : '' }}"
             data-value="bi bi-envelope-open" data-search="envelope-open">
            <i class="bi bi-envelope-open" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-open</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-open-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-open-fill" data-search="envelope-open-fill">
            <i class="bi bi-envelope-open-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-open-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-open-heart' ? 'selected' : '' }}"
             data-value="bi bi-envelope-open-heart" data-search="envelope-open-heart">
            <i class="bi bi-envelope-open-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-open-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-open-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-open-heart-fill" data-search="envelope-open-heart-fill">
            <i class="bi bi-envelope-open-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-open-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-paper' ? 'selected' : '' }}"
             data-value="bi bi-envelope-paper" data-search="envelope-paper">
            <i class="bi bi-envelope-paper" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-paper</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-paper-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-paper-fill" data-search="envelope-paper-fill">
            <i class="bi bi-envelope-paper-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-paper-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-paper-heart' ? 'selected' : '' }}"
             data-value="bi bi-envelope-paper-heart" data-search="envelope-paper-heart">
            <i class="bi bi-envelope-paper-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-paper-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-paper-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-paper-heart-fill" data-search="envelope-paper-heart-fill">
            <i class="bi bi-envelope-paper-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-paper-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-plus' ? 'selected' : '' }}"
             data-value="bi bi-envelope-plus" data-search="envelope-plus">
            <i class="bi bi-envelope-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-plus-fill" data-search="envelope-plus-fill">
            <i class="bi bi-envelope-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-slash' ? 'selected' : '' }}"
             data-value="bi bi-envelope-slash" data-search="envelope-slash">
            <i class="bi bi-envelope-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-slash-fill" data-search="envelope-slash-fill">
            <i class="bi bi-envelope-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-x' ? 'selected' : '' }}"
             data-value="bi bi-envelope-x" data-search="envelope-x">
            <i class="bi bi-envelope-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-envelope-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-envelope-x-fill" data-search="envelope-x-fill">
            <i class="bi bi-envelope-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">envelope-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eraser' ? 'selected' : '' }}"
             data-value="bi bi-eraser" data-search="eraser">
            <i class="bi bi-eraser" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eraser</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eraser-fill' ? 'selected' : '' }}"
             data-value="bi bi-eraser-fill" data-search="eraser-fill">
            <i class="bi bi-eraser-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eraser-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-escape' ? 'selected' : '' }}"
             data-value="bi bi-escape" data-search="escape">
            <i class="bi bi-escape" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">escape</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ethernet' ? 'selected' : '' }}"
             data-value="bi bi-ethernet" data-search="ethernet">
            <i class="bi bi-ethernet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ethernet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ev-front' ? 'selected' : '' }}"
             data-value="bi bi-ev-front" data-search="ev-front">
            <i class="bi bi-ev-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ev-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ev-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-ev-front-fill" data-search="ev-front-fill">
            <i class="bi bi-ev-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ev-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ev-station' ? 'selected' : '' }}"
             data-value="bi bi-ev-station" data-search="ev-station">
            <i class="bi bi-ev-station" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ev-station</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ev-station-fill' ? 'selected' : '' }}"
             data-value="bi bi-ev-station-fill" data-search="ev-station-fill">
            <i class="bi bi-ev-station-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ev-station-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-exclamation" data-search="exclamation">
            <i class="bi bi-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-circle' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-circle" data-search="exclamation-circle">
            <i class="bi bi-exclamation-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-circle-fill" data-search="exclamation-circle-fill">
            <i class="bi bi-exclamation-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-diamond' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-diamond" data-search="exclamation-diamond">
            <i class="bi bi-exclamation-diamond" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-diamond</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-diamond-fill' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-diamond-fill" data-search="exclamation-diamond-fill">
            <i class="bi bi-exclamation-diamond-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-diamond-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-lg' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-lg" data-search="exclamation-lg">
            <i class="bi bi-exclamation-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-octagon' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-octagon" data-search="exclamation-octagon">
            <i class="bi bi-exclamation-octagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-octagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-octagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-octagon-fill" data-search="exclamation-octagon-fill">
            <i class="bi bi-exclamation-octagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-octagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-square' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-square" data-search="exclamation-square">
            <i class="bi bi-exclamation-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-square-fill" data-search="exclamation-square-fill">
            <i class="bi bi-exclamation-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-triangle' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-triangle" data-search="exclamation-triangle">
            <i class="bi bi-exclamation-triangle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-triangle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclamation-triangle-fill' ? 'selected' : '' }}"
             data-value="bi bi-exclamation-triangle-fill" data-search="exclamation-triangle-fill">
            <i class="bi bi-exclamation-triangle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclamation-triangle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exclude' ? 'selected' : '' }}"
             data-value="bi bi-exclude" data-search="exclude">
            <i class="bi bi-exclude" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exclude</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-explicit' ? 'selected' : '' }}"
             data-value="bi bi-explicit" data-search="explicit">
            <i class="bi bi-explicit" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">explicit</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-explicit-fill' ? 'selected' : '' }}"
             data-value="bi bi-explicit-fill" data-search="explicit-fill">
            <i class="bi bi-explicit-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">explicit-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-exposure' ? 'selected' : '' }}"
             data-value="bi bi-exposure" data-search="exposure">
            <i class="bi bi-exposure" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">exposure</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eye' ? 'selected' : '' }}"
             data-value="bi bi-eye" data-search="eye">
            <i class="bi bi-eye" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eye</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eye-fill' ? 'selected' : '' }}"
             data-value="bi bi-eye-fill" data-search="eye-fill">
            <i class="bi bi-eye-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eye-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eye-slash' ? 'selected' : '' }}"
             data-value="bi bi-eye-slash" data-search="eye-slash">
            <i class="bi bi-eye-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eye-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eye-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-eye-slash-fill" data-search="eye-slash-fill">
            <i class="bi bi-eye-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eye-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eyedropper' ? 'selected' : '' }}"
             data-value="bi bi-eyedropper" data-search="eyedropper">
            <i class="bi bi-eyedropper" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eyedropper</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-eyeglasses' ? 'selected' : '' }}"
             data-value="bi bi-eyeglasses" data-search="eyeglasses">
            <i class="bi bi-eyeglasses" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">eyeglasses</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-facebook' ? 'selected' : '' }}"
             data-value="bi bi-facebook" data-search="facebook">
            <i class="bi bi-facebook" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">facebook</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fan' ? 'selected' : '' }}"
             data-value="bi bi-fan" data-search="fan">
            <i class="bi bi-fan" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fan</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward" data-search="fast-forward">
            <i class="bi bi-fast-forward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward-btn' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward-btn" data-search="fast-forward-btn">
            <i class="bi bi-fast-forward-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward-btn-fill" data-search="fast-forward-btn-fill">
            <i class="bi bi-fast-forward-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward-circle' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward-circle" data-search="fast-forward-circle">
            <i class="bi bi-fast-forward-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward-circle-fill" data-search="fast-forward-circle-fill">
            <i class="bi bi-fast-forward-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fast-forward-fill' ? 'selected' : '' }}"
             data-value="bi bi-fast-forward-fill" data-search="fast-forward-fill">
            <i class="bi bi-fast-forward-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fast-forward-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-feather' ? 'selected' : '' }}"
             data-value="bi bi-feather" data-search="feather">
            <i class="bi bi-feather" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">feather</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-feather2' ? 'selected' : '' }}"
             data-value="bi bi-feather2" data-search="feather2">
            <i class="bi bi-feather2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">feather2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file' ? 'selected' : '' }}"
             data-value="bi bi-file" data-search="file">
            <i class="bi bi-file" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-file-arrow-down" data-search="file-arrow-down">
            <i class="bi bi-file-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-arrow-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-arrow-down-fill" data-search="file-arrow-down-fill">
            <i class="bi bi-file-arrow-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-arrow-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-file-arrow-up" data-search="file-arrow-up">
            <i class="bi bi-file-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-arrow-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-arrow-up-fill" data-search="file-arrow-up-fill">
            <i class="bi bi-file-arrow-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-arrow-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-bar-graph' ? 'selected' : '' }}"
             data-value="bi bi-file-bar-graph" data-search="file-bar-graph">
            <i class="bi bi-file-bar-graph" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-bar-graph</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-bar-graph-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-bar-graph-fill" data-search="file-bar-graph-fill">
            <i class="bi bi-file-bar-graph-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-bar-graph-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-binary' ? 'selected' : '' }}"
             data-value="bi bi-file-binary" data-search="file-binary">
            <i class="bi bi-file-binary" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-binary</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-binary-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-binary-fill" data-search="file-binary-fill">
            <i class="bi bi-file-binary-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-binary-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-break' ? 'selected' : '' }}"
             data-value="bi bi-file-break" data-search="file-break">
            <i class="bi bi-file-break" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-break</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-break-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-break-fill" data-search="file-break-fill">
            <i class="bi bi-file-break-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-break-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-check' ? 'selected' : '' }}"
             data-value="bi bi-file-check" data-search="file-check">
            <i class="bi bi-file-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-check-fill" data-search="file-check-fill">
            <i class="bi bi-file-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-code' ? 'selected' : '' }}"
             data-value="bi bi-file-code" data-search="file-code">
            <i class="bi bi-file-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-code</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-code-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-code-fill" data-search="file-code-fill">
            <i class="bi bi-file-code-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-code-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-diff' ? 'selected' : '' }}"
             data-value="bi bi-file-diff" data-search="file-diff">
            <i class="bi bi-file-diff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-diff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-diff-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-diff-fill" data-search="file-diff-fill">
            <i class="bi bi-file-diff-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-diff-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark" data-search="file-earmark">
            <i class="bi bi-file-earmark" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-arrow-down" data-search="file-earmark-arrow-down">
            <i class="bi bi-file-earmark-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-arrow-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-arrow-down-fill" data-search="file-earmark-arrow-down-fill">
            <i class="bi bi-file-earmark-arrow-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-arrow-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-arrow-up" data-search="file-earmark-arrow-up">
            <i class="bi bi-file-earmark-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-arrow-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-arrow-up-fill" data-search="file-earmark-arrow-up-fill">
            <i class="bi bi-file-earmark-arrow-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-arrow-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-bar-graph' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-bar-graph" data-search="file-earmark-bar-graph">
            <i class="bi bi-file-earmark-bar-graph" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-bar-graph</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-bar-graph-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-bar-graph-fill" data-search="file-earmark-bar-graph-fill">
            <i class="bi bi-file-earmark-bar-graph-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-bar-graph-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-binary' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-binary" data-search="file-earmark-binary">
            <i class="bi bi-file-earmark-binary" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-binary</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-binary-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-binary-fill" data-search="file-earmark-binary-fill">
            <i class="bi bi-file-earmark-binary-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-binary-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-break' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-break" data-search="file-earmark-break">
            <i class="bi bi-file-earmark-break" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-break</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-break-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-break-fill" data-search="file-earmark-break-fill">
            <i class="bi bi-file-earmark-break-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-break-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-check' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-check" data-search="file-earmark-check">
            <i class="bi bi-file-earmark-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-check-fill" data-search="file-earmark-check-fill">
            <i class="bi bi-file-earmark-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-code' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-code" data-search="file-earmark-code">
            <i class="bi bi-file-earmark-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-code</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-code-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-code-fill" data-search="file-earmark-code-fill">
            <i class="bi bi-file-earmark-code-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-code-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-diff' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-diff" data-search="file-earmark-diff">
            <i class="bi bi-file-earmark-diff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-diff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-diff-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-diff-fill" data-search="file-earmark-diff-fill">
            <i class="bi bi-file-earmark-diff-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-diff-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-easel' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-easel" data-search="file-earmark-easel">
            <i class="bi bi-file-earmark-easel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-easel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-easel-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-easel-fill" data-search="file-earmark-easel-fill">
            <i class="bi bi-file-earmark-easel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-easel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-excel' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-excel" data-search="file-earmark-excel">
            <i class="bi bi-file-earmark-excel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-excel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-excel-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-excel-fill" data-search="file-earmark-excel-fill">
            <i class="bi bi-file-earmark-excel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-excel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-fill" data-search="file-earmark-fill">
            <i class="bi bi-file-earmark-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-font' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-font" data-search="file-earmark-font">
            <i class="bi bi-file-earmark-font" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-font</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-font-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-font-fill" data-search="file-earmark-font-fill">
            <i class="bi bi-file-earmark-font-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-font-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-image' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-image" data-search="file-earmark-image">
            <i class="bi bi-file-earmark-image" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-image</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-image-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-image-fill" data-search="file-earmark-image-fill">
            <i class="bi bi-file-earmark-image-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-image-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-lock' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-lock" data-search="file-earmark-lock">
            <i class="bi bi-file-earmark-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-lock-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-lock-fill" data-search="file-earmark-lock-fill">
            <i class="bi bi-file-earmark-lock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-lock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-lock2' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-lock2" data-search="file-earmark-lock2">
            <i class="bi bi-file-earmark-lock2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-lock2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-lock2-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-lock2-fill" data-search="file-earmark-lock2-fill">
            <i class="bi bi-file-earmark-lock2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-lock2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-medical' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-medical" data-search="file-earmark-medical">
            <i class="bi bi-file-earmark-medical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-medical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-medical-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-medical-fill" data-search="file-earmark-medical-fill">
            <i class="bi bi-file-earmark-medical-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-medical-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-minus' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-minus" data-search="file-earmark-minus">
            <i class="bi bi-file-earmark-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-minus-fill" data-search="file-earmark-minus-fill">
            <i class="bi bi-file-earmark-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-music' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-music" data-search="file-earmark-music">
            <i class="bi bi-file-earmark-music" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-music</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-music-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-music-fill" data-search="file-earmark-music-fill">
            <i class="bi bi-file-earmark-music-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-music-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-pdf' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-pdf" data-search="file-earmark-pdf">
            <i class="bi bi-file-earmark-pdf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-pdf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-pdf-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-pdf-fill" data-search="file-earmark-pdf-fill">
            <i class="bi bi-file-earmark-pdf-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-pdf-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-person' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-person" data-search="file-earmark-person">
            <i class="bi bi-file-earmark-person" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-person</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-person-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-person-fill" data-search="file-earmark-person-fill">
            <i class="bi bi-file-earmark-person-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-person-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-play' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-play" data-search="file-earmark-play">
            <i class="bi bi-file-earmark-play" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-play</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-play-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-play-fill" data-search="file-earmark-play-fill">
            <i class="bi bi-file-earmark-play-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-play-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-plus' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-plus" data-search="file-earmark-plus">
            <i class="bi bi-file-earmark-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-plus-fill" data-search="file-earmark-plus-fill">
            <i class="bi bi-file-earmark-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-post' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-post" data-search="file-earmark-post">
            <i class="bi bi-file-earmark-post" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-post</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-post-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-post-fill" data-search="file-earmark-post-fill">
            <i class="bi bi-file-earmark-post-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-post-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-ppt' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-ppt" data-search="file-earmark-ppt">
            <i class="bi bi-file-earmark-ppt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-ppt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-ppt-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-ppt-fill" data-search="file-earmark-ppt-fill">
            <i class="bi bi-file-earmark-ppt-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-ppt-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-richtext' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-richtext" data-search="file-earmark-richtext">
            <i class="bi bi-file-earmark-richtext" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-richtext</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-richtext-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-richtext-fill" data-search="file-earmark-richtext-fill">
            <i class="bi bi-file-earmark-richtext-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-richtext-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-ruled' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-ruled" data-search="file-earmark-ruled">
            <i class="bi bi-file-earmark-ruled" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-ruled</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-ruled-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-ruled-fill" data-search="file-earmark-ruled-fill">
            <i class="bi bi-file-earmark-ruled-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-ruled-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-slides' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-slides" data-search="file-earmark-slides">
            <i class="bi bi-file-earmark-slides" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-slides</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-slides-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-slides-fill" data-search="file-earmark-slides-fill">
            <i class="bi bi-file-earmark-slides-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-slides-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-spreadsheet' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-spreadsheet" data-search="file-earmark-spreadsheet">
            <i class="bi bi-file-earmark-spreadsheet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-spreadsheet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-spreadsheet-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-spreadsheet-fill" data-search="file-earmark-spreadsheet-fill">
            <i class="bi bi-file-earmark-spreadsheet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-spreadsheet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-text' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-text" data-search="file-earmark-text">
            <i class="bi bi-file-earmark-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-text-fill" data-search="file-earmark-text-fill">
            <i class="bi bi-file-earmark-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-word' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-word" data-search="file-earmark-word">
            <i class="bi bi-file-earmark-word" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-word</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-word-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-word-fill" data-search="file-earmark-word-fill">
            <i class="bi bi-file-earmark-word-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-word-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-x' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-x" data-search="file-earmark-x">
            <i class="bi bi-file-earmark-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-x-fill" data-search="file-earmark-x-fill">
            <i class="bi bi-file-earmark-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-zip' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-zip" data-search="file-earmark-zip">
            <i class="bi bi-file-earmark-zip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-zip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-earmark-zip-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-earmark-zip-fill" data-search="file-earmark-zip-fill">
            <i class="bi bi-file-earmark-zip-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-earmark-zip-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-easel' ? 'selected' : '' }}"
             data-value="bi bi-file-easel" data-search="file-easel">
            <i class="bi bi-file-easel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-easel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-easel-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-easel-fill" data-search="file-easel-fill">
            <i class="bi bi-file-easel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-easel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-excel' ? 'selected' : '' }}"
             data-value="bi bi-file-excel" data-search="file-excel">
            <i class="bi bi-file-excel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-excel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-excel-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-excel-fill" data-search="file-excel-fill">
            <i class="bi bi-file-excel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-excel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-fill" data-search="file-fill">
            <i class="bi bi-file-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-font' ? 'selected' : '' }}"
             data-value="bi bi-file-font" data-search="file-font">
            <i class="bi bi-file-font" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-font</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-font-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-font-fill" data-search="file-font-fill">
            <i class="bi bi-file-font-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-font-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-image' ? 'selected' : '' }}"
             data-value="bi bi-file-image" data-search="file-image">
            <i class="bi bi-file-image" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-image</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-image-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-image-fill" data-search="file-image-fill">
            <i class="bi bi-file-image-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-image-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-lock' ? 'selected' : '' }}"
             data-value="bi bi-file-lock" data-search="file-lock">
            <i class="bi bi-file-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-lock-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-lock-fill" data-search="file-lock-fill">
            <i class="bi bi-file-lock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-lock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-lock2' ? 'selected' : '' }}"
             data-value="bi bi-file-lock2" data-search="file-lock2">
            <i class="bi bi-file-lock2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-lock2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-lock2-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-lock2-fill" data-search="file-lock2-fill">
            <i class="bi bi-file-lock2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-lock2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-medical' ? 'selected' : '' }}"
             data-value="bi bi-file-medical" data-search="file-medical">
            <i class="bi bi-file-medical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-medical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-medical-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-medical-fill" data-search="file-medical-fill">
            <i class="bi bi-file-medical-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-medical-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-minus' ? 'selected' : '' }}"
             data-value="bi bi-file-minus" data-search="file-minus">
            <i class="bi bi-file-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-minus-fill" data-search="file-minus-fill">
            <i class="bi bi-file-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-music' ? 'selected' : '' }}"
             data-value="bi bi-file-music" data-search="file-music">
            <i class="bi bi-file-music" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-music</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-music-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-music-fill" data-search="file-music-fill">
            <i class="bi bi-file-music-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-music-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-pdf' ? 'selected' : '' }}"
             data-value="bi bi-file-pdf" data-search="file-pdf">
            <i class="bi bi-file-pdf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-pdf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-pdf-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-pdf-fill" data-search="file-pdf-fill">
            <i class="bi bi-file-pdf-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-pdf-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-person' ? 'selected' : '' }}"
             data-value="bi bi-file-person" data-search="file-person">
            <i class="bi bi-file-person" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-person</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-person-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-person-fill" data-search="file-person-fill">
            <i class="bi bi-file-person-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-person-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-play' ? 'selected' : '' }}"
             data-value="bi bi-file-play" data-search="file-play">
            <i class="bi bi-file-play" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-play</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-play-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-play-fill" data-search="file-play-fill">
            <i class="bi bi-file-play-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-play-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-plus' ? 'selected' : '' }}"
             data-value="bi bi-file-plus" data-search="file-plus">
            <i class="bi bi-file-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-plus-fill" data-search="file-plus-fill">
            <i class="bi bi-file-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-post' ? 'selected' : '' }}"
             data-value="bi bi-file-post" data-search="file-post">
            <i class="bi bi-file-post" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-post</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-post-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-post-fill" data-search="file-post-fill">
            <i class="bi bi-file-post-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-post-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-ppt' ? 'selected' : '' }}"
             data-value="bi bi-file-ppt" data-search="file-ppt">
            <i class="bi bi-file-ppt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-ppt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-ppt-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-ppt-fill" data-search="file-ppt-fill">
            <i class="bi bi-file-ppt-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-ppt-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-richtext' ? 'selected' : '' }}"
             data-value="bi bi-file-richtext" data-search="file-richtext">
            <i class="bi bi-file-richtext" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-richtext</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-richtext-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-richtext-fill" data-search="file-richtext-fill">
            <i class="bi bi-file-richtext-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-richtext-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-ruled' ? 'selected' : '' }}"
             data-value="bi bi-file-ruled" data-search="file-ruled">
            <i class="bi bi-file-ruled" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-ruled</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-ruled-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-ruled-fill" data-search="file-ruled-fill">
            <i class="bi bi-file-ruled-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-ruled-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-slides' ? 'selected' : '' }}"
             data-value="bi bi-file-slides" data-search="file-slides">
            <i class="bi bi-file-slides" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-slides</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-slides-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-slides-fill" data-search="file-slides-fill">
            <i class="bi bi-file-slides-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-slides-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-spreadsheet' ? 'selected' : '' }}"
             data-value="bi bi-file-spreadsheet" data-search="file-spreadsheet">
            <i class="bi bi-file-spreadsheet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-spreadsheet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-spreadsheet-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-spreadsheet-fill" data-search="file-spreadsheet-fill">
            <i class="bi bi-file-spreadsheet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-spreadsheet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-text' ? 'selected' : '' }}"
             data-value="bi bi-file-text" data-search="file-text">
            <i class="bi bi-file-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-text-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-text-fill" data-search="file-text-fill">
            <i class="bi bi-file-text-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-text-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-word' ? 'selected' : '' }}"
             data-value="bi bi-file-word" data-search="file-word">
            <i class="bi bi-file-word" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-word</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-word-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-word-fill" data-search="file-word-fill">
            <i class="bi bi-file-word-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-word-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-x' ? 'selected' : '' }}"
             data-value="bi bi-file-x" data-search="file-x">
            <i class="bi bi-file-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-x-fill" data-search="file-x-fill">
            <i class="bi bi-file-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-zip' ? 'selected' : '' }}"
             data-value="bi bi-file-zip" data-search="file-zip">
            <i class="bi bi-file-zip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-zip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-file-zip-fill' ? 'selected' : '' }}"
             data-value="bi bi-file-zip-fill" data-search="file-zip-fill">
            <i class="bi bi-file-zip-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">file-zip-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-files' ? 'selected' : '' }}"
             data-value="bi bi-files" data-search="files">
            <i class="bi bi-files" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">files</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-files-alt' ? 'selected' : '' }}"
             data-value="bi bi-files-alt" data-search="files-alt">
            <i class="bi bi-files-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">files-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-aac' ? 'selected' : '' }}"
             data-value="bi bi-filetype-aac" data-search="filetype-aac">
            <i class="bi bi-filetype-aac" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-aac</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-ai' ? 'selected' : '' }}"
             data-value="bi bi-filetype-ai" data-search="filetype-ai">
            <i class="bi bi-filetype-ai" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-ai</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-bmp' ? 'selected' : '' }}"
             data-value="bi bi-filetype-bmp" data-search="filetype-bmp">
            <i class="bi bi-filetype-bmp" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-bmp</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-cs' ? 'selected' : '' }}"
             data-value="bi bi-filetype-cs" data-search="filetype-cs">
            <i class="bi bi-filetype-cs" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-cs</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-css' ? 'selected' : '' }}"
             data-value="bi bi-filetype-css" data-search="filetype-css">
            <i class="bi bi-filetype-css" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-css</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-csv' ? 'selected' : '' }}"
             data-value="bi bi-filetype-csv" data-search="filetype-csv">
            <i class="bi bi-filetype-csv" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-csv</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-doc' ? 'selected' : '' }}"
             data-value="bi bi-filetype-doc" data-search="filetype-doc">
            <i class="bi bi-filetype-doc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-doc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-docx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-docx" data-search="filetype-docx">
            <i class="bi bi-filetype-docx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-docx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-exe' ? 'selected' : '' }}"
             data-value="bi bi-filetype-exe" data-search="filetype-exe">
            <i class="bi bi-filetype-exe" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-exe</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-gif' ? 'selected' : '' }}"
             data-value="bi bi-filetype-gif" data-search="filetype-gif">
            <i class="bi bi-filetype-gif" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-gif</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-heic' ? 'selected' : '' }}"
             data-value="bi bi-filetype-heic" data-search="filetype-heic">
            <i class="bi bi-filetype-heic" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-heic</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-html' ? 'selected' : '' }}"
             data-value="bi bi-filetype-html" data-search="filetype-html">
            <i class="bi bi-filetype-html" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-html</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-java' ? 'selected' : '' }}"
             data-value="bi bi-filetype-java" data-search="filetype-java">
            <i class="bi bi-filetype-java" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-java</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-jpg' ? 'selected' : '' }}"
             data-value="bi bi-filetype-jpg" data-search="filetype-jpg">
            <i class="bi bi-filetype-jpg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-jpg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-js' ? 'selected' : '' }}"
             data-value="bi bi-filetype-js" data-search="filetype-js">
            <i class="bi bi-filetype-js" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-js</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-json' ? 'selected' : '' }}"
             data-value="bi bi-filetype-json" data-search="filetype-json">
            <i class="bi bi-filetype-json" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-json</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-jsx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-jsx" data-search="filetype-jsx">
            <i class="bi bi-filetype-jsx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-jsx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-key' ? 'selected' : '' }}"
             data-value="bi bi-filetype-key" data-search="filetype-key">
            <i class="bi bi-filetype-key" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-key</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-m4p' ? 'selected' : '' }}"
             data-value="bi bi-filetype-m4p" data-search="filetype-m4p">
            <i class="bi bi-filetype-m4p" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-m4p</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-md' ? 'selected' : '' }}"
             data-value="bi bi-filetype-md" data-search="filetype-md">
            <i class="bi bi-filetype-md" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-md</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-mdx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-mdx" data-search="filetype-mdx">
            <i class="bi bi-filetype-mdx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-mdx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-mov' ? 'selected' : '' }}"
             data-value="bi bi-filetype-mov" data-search="filetype-mov">
            <i class="bi bi-filetype-mov" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-mov</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-mp3' ? 'selected' : '' }}"
             data-value="bi bi-filetype-mp3" data-search="filetype-mp3">
            <i class="bi bi-filetype-mp3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-mp3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-mp4' ? 'selected' : '' }}"
             data-value="bi bi-filetype-mp4" data-search="filetype-mp4">
            <i class="bi bi-filetype-mp4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-mp4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-otf' ? 'selected' : '' }}"
             data-value="bi bi-filetype-otf" data-search="filetype-otf">
            <i class="bi bi-filetype-otf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-otf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-pdf' ? 'selected' : '' }}"
             data-value="bi bi-filetype-pdf" data-search="filetype-pdf">
            <i class="bi bi-filetype-pdf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-pdf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-php' ? 'selected' : '' }}"
             data-value="bi bi-filetype-php" data-search="filetype-php">
            <i class="bi bi-filetype-php" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-php</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-png' ? 'selected' : '' }}"
             data-value="bi bi-filetype-png" data-search="filetype-png">
            <i class="bi bi-filetype-png" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-png</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-ppt' ? 'selected' : '' }}"
             data-value="bi bi-filetype-ppt" data-search="filetype-ppt">
            <i class="bi bi-filetype-ppt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-ppt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-pptx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-pptx" data-search="filetype-pptx">
            <i class="bi bi-filetype-pptx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-pptx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-psd' ? 'selected' : '' }}"
             data-value="bi bi-filetype-psd" data-search="filetype-psd">
            <i class="bi bi-filetype-psd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-psd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-py' ? 'selected' : '' }}"
             data-value="bi bi-filetype-py" data-search="filetype-py">
            <i class="bi bi-filetype-py" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-py</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-raw' ? 'selected' : '' }}"
             data-value="bi bi-filetype-raw" data-search="filetype-raw">
            <i class="bi bi-filetype-raw" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-raw</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-rb' ? 'selected' : '' }}"
             data-value="bi bi-filetype-rb" data-search="filetype-rb">
            <i class="bi bi-filetype-rb" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-rb</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-sass' ? 'selected' : '' }}"
             data-value="bi bi-filetype-sass" data-search="filetype-sass">
            <i class="bi bi-filetype-sass" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-sass</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-scss' ? 'selected' : '' }}"
             data-value="bi bi-filetype-scss" data-search="filetype-scss">
            <i class="bi bi-filetype-scss" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-scss</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-sh' ? 'selected' : '' }}"
             data-value="bi bi-filetype-sh" data-search="filetype-sh">
            <i class="bi bi-filetype-sh" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-sh</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-sql' ? 'selected' : '' }}"
             data-value="bi bi-filetype-sql" data-search="filetype-sql">
            <i class="bi bi-filetype-sql" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-sql</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-svg' ? 'selected' : '' }}"
             data-value="bi bi-filetype-svg" data-search="filetype-svg">
            <i class="bi bi-filetype-svg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-svg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-tiff' ? 'selected' : '' }}"
             data-value="bi bi-filetype-tiff" data-search="filetype-tiff">
            <i class="bi bi-filetype-tiff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-tiff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-tsx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-tsx" data-search="filetype-tsx">
            <i class="bi bi-filetype-tsx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-tsx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-ttf' ? 'selected' : '' }}"
             data-value="bi bi-filetype-ttf" data-search="filetype-ttf">
            <i class="bi bi-filetype-ttf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-ttf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-txt' ? 'selected' : '' }}"
             data-value="bi bi-filetype-txt" data-search="filetype-txt">
            <i class="bi bi-filetype-txt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-txt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-wav' ? 'selected' : '' }}"
             data-value="bi bi-filetype-wav" data-search="filetype-wav">
            <i class="bi bi-filetype-wav" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-wav</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-woff' ? 'selected' : '' }}"
             data-value="bi bi-filetype-woff" data-search="filetype-woff">
            <i class="bi bi-filetype-woff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-woff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-xls' ? 'selected' : '' }}"
             data-value="bi bi-filetype-xls" data-search="filetype-xls">
            <i class="bi bi-filetype-xls" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-xls</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-xlsx' ? 'selected' : '' }}"
             data-value="bi bi-filetype-xlsx" data-search="filetype-xlsx">
            <i class="bi bi-filetype-xlsx" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-xlsx</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-xml' ? 'selected' : '' }}"
             data-value="bi bi-filetype-xml" data-search="filetype-xml">
            <i class="bi bi-filetype-xml" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-xml</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filetype-yml' ? 'selected' : '' }}"
             data-value="bi bi-filetype-yml" data-search="filetype-yml">
            <i class="bi bi-filetype-yml" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filetype-yml</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-film' ? 'selected' : '' }}"
             data-value="bi bi-film" data-search="film">
            <i class="bi bi-film" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">film</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter' ? 'selected' : '' }}"
             data-value="bi bi-filter" data-search="filter">
            <i class="bi bi-filter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-circle' ? 'selected' : '' }}"
             data-value="bi bi-filter-circle" data-search="filter-circle">
            <i class="bi bi-filter-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-filter-circle-fill" data-search="filter-circle-fill">
            <i class="bi bi-filter-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-left' ? 'selected' : '' }}"
             data-value="bi bi-filter-left" data-search="filter-left">
            <i class="bi bi-filter-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-right' ? 'selected' : '' }}"
             data-value="bi bi-filter-right" data-search="filter-right">
            <i class="bi bi-filter-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-square' ? 'selected' : '' }}"
             data-value="bi bi-filter-square" data-search="filter-square">
            <i class="bi bi-filter-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-filter-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-filter-square-fill" data-search="filter-square-fill">
            <i class="bi bi-filter-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">filter-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fingerprint' ? 'selected' : '' }}"
             data-value="bi bi-fingerprint" data-search="fingerprint">
            <i class="bi bi-fingerprint" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fingerprint</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fire' ? 'selected' : '' }}"
             data-value="bi bi-fire" data-search="fire">
            <i class="bi bi-fire" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fire</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flag' ? 'selected' : '' }}"
             data-value="bi bi-flag" data-search="flag">
            <i class="bi bi-flag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flag-fill' ? 'selected' : '' }}"
             data-value="bi bi-flag-fill" data-search="flag-fill">
            <i class="bi bi-flag-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flag-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flask' ? 'selected' : '' }}"
             data-value="bi bi-flask" data-search="flask">
            <i class="bi bi-flask" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flask</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flask-fill' ? 'selected' : '' }}"
             data-value="bi bi-flask-fill" data-search="flask-fill">
            <i class="bi bi-flask-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flask-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flask-florence' ? 'selected' : '' }}"
             data-value="bi bi-flask-florence" data-search="flask-florence">
            <i class="bi bi-flask-florence" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flask-florence</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flask-florence-fill' ? 'selected' : '' }}"
             data-value="bi bi-flask-florence-fill" data-search="flask-florence-fill">
            <i class="bi bi-flask-florence-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flask-florence-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-floppy' ? 'selected' : '' }}"
             data-value="bi bi-floppy" data-search="floppy">
            <i class="bi bi-floppy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">floppy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-floppy-fill' ? 'selected' : '' }}"
             data-value="bi bi-floppy-fill" data-search="floppy-fill">
            <i class="bi bi-floppy-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">floppy-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-floppy2' ? 'selected' : '' }}"
             data-value="bi bi-floppy2" data-search="floppy2">
            <i class="bi bi-floppy2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">floppy2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-floppy2-fill' ? 'selected' : '' }}"
             data-value="bi bi-floppy2-fill" data-search="floppy2-fill">
            <i class="bi bi-floppy2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">floppy2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flower1' ? 'selected' : '' }}"
             data-value="bi bi-flower1" data-search="flower1">
            <i class="bi bi-flower1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flower1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flower2' ? 'selected' : '' }}"
             data-value="bi bi-flower2" data-search="flower2">
            <i class="bi bi-flower2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flower2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-flower3' ? 'selected' : '' }}"
             data-value="bi bi-flower3" data-search="flower3">
            <i class="bi bi-flower3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">flower3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder' ? 'selected' : '' }}"
             data-value="bi bi-folder" data-search="folder">
            <i class="bi bi-folder" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-check' ? 'selected' : '' }}"
             data-value="bi bi-folder-check" data-search="folder-check">
            <i class="bi bi-folder-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-fill' ? 'selected' : '' }}"
             data-value="bi bi-folder-fill" data-search="folder-fill">
            <i class="bi bi-folder-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-minus' ? 'selected' : '' }}"
             data-value="bi bi-folder-minus" data-search="folder-minus">
            <i class="bi bi-folder-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-plus' ? 'selected' : '' }}"
             data-value="bi bi-folder-plus" data-search="folder-plus">
            <i class="bi bi-folder-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-symlink' ? 'selected' : '' }}"
             data-value="bi bi-folder-symlink" data-search="folder-symlink">
            <i class="bi bi-folder-symlink" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-symlink</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-symlink-fill' ? 'selected' : '' }}"
             data-value="bi bi-folder-symlink-fill" data-search="folder-symlink-fill">
            <i class="bi bi-folder-symlink-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-symlink-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder-x' ? 'selected' : '' }}"
             data-value="bi bi-folder-x" data-search="folder-x">
            <i class="bi bi-folder-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder2' ? 'selected' : '' }}"
             data-value="bi bi-folder2" data-search="folder2">
            <i class="bi bi-folder2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-folder2-open' ? 'selected' : '' }}"
             data-value="bi bi-folder2-open" data-search="folder2-open">
            <i class="bi bi-folder2-open" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">folder2-open</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fonts' ? 'selected' : '' }}"
             data-value="bi bi-fonts" data-search="fonts">
            <i class="bi bi-fonts" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fonts</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fork-knife' ? 'selected' : '' }}"
             data-value="bi bi-fork-knife" data-search="fork-knife">
            <i class="bi bi-fork-knife" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fork-knife</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-forward' ? 'selected' : '' }}"
             data-value="bi bi-forward" data-search="forward">
            <i class="bi bi-forward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">forward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-forward-fill' ? 'selected' : '' }}"
             data-value="bi bi-forward-fill" data-search="forward-fill">
            <i class="bi bi-forward-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">forward-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-front' ? 'selected' : '' }}"
             data-value="bi bi-front" data-search="front">
            <i class="bi bi-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fuel-pump' ? 'selected' : '' }}"
             data-value="bi bi-fuel-pump" data-search="fuel-pump">
            <i class="bi bi-fuel-pump" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fuel-pump</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fuel-pump-diesel' ? 'selected' : '' }}"
             data-value="bi bi-fuel-pump-diesel" data-search="fuel-pump-diesel">
            <i class="bi bi-fuel-pump-diesel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fuel-pump-diesel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fuel-pump-diesel-fill' ? 'selected' : '' }}"
             data-value="bi bi-fuel-pump-diesel-fill" data-search="fuel-pump-diesel-fill">
            <i class="bi bi-fuel-pump-diesel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fuel-pump-diesel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fuel-pump-fill' ? 'selected' : '' }}"
             data-value="bi bi-fuel-pump-fill" data-search="fuel-pump-fill">
            <i class="bi bi-fuel-pump-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fuel-pump-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fullscreen' ? 'selected' : '' }}"
             data-value="bi bi-fullscreen" data-search="fullscreen">
            <i class="bi bi-fullscreen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fullscreen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-fullscreen-exit' ? 'selected' : '' }}"
             data-value="bi bi-fullscreen-exit" data-search="fullscreen-exit">
            <i class="bi bi-fullscreen-exit" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">fullscreen-exit</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-funnel' ? 'selected' : '' }}"
             data-value="bi bi-funnel" data-search="funnel">
            <i class="bi bi-funnel" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">funnel</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-funnel-fill' ? 'selected' : '' }}"
             data-value="bi bi-funnel-fill" data-search="funnel-fill">
            <i class="bi bi-funnel-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">funnel-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gear' ? 'selected' : '' }}"
             data-value="bi bi-gear" data-search="gear">
            <i class="bi bi-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gear-fill' ? 'selected' : '' }}"
             data-value="bi bi-gear-fill" data-search="gear-fill">
            <i class="bi bi-gear-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gear-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gear-wide' ? 'selected' : '' }}"
             data-value="bi bi-gear-wide" data-search="gear-wide">
            <i class="bi bi-gear-wide" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gear-wide</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gear-wide-connected' ? 'selected' : '' }}"
             data-value="bi bi-gear-wide-connected" data-search="gear-wide-connected">
            <i class="bi bi-gear-wide-connected" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gear-wide-connected</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gem' ? 'selected' : '' }}"
             data-value="bi bi-gem" data-search="gem">
            <i class="bi bi-gem" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gem</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gender-ambiguous' ? 'selected' : '' }}"
             data-value="bi bi-gender-ambiguous" data-search="gender-ambiguous">
            <i class="bi bi-gender-ambiguous" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gender-ambiguous</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gender-female' ? 'selected' : '' }}"
             data-value="bi bi-gender-female" data-search="gender-female">
            <i class="bi bi-gender-female" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gender-female</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gender-male' ? 'selected' : '' }}"
             data-value="bi bi-gender-male" data-search="gender-male">
            <i class="bi bi-gender-male" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gender-male</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gender-neuter' ? 'selected' : '' }}"
             data-value="bi bi-gender-neuter" data-search="gender-neuter">
            <i class="bi bi-gender-neuter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gender-neuter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gender-trans' ? 'selected' : '' }}"
             data-value="bi bi-gender-trans" data-search="gender-trans">
            <i class="bi bi-gender-trans" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gender-trans</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-geo' ? 'selected' : '' }}"
             data-value="bi bi-geo" data-search="geo">
            <i class="bi bi-geo" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">geo</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-geo-alt' ? 'selected' : '' }}"
             data-value="bi bi-geo-alt" data-search="geo-alt">
            <i class="bi bi-geo-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">geo-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-geo-alt-fill' ? 'selected' : '' }}"
             data-value="bi bi-geo-alt-fill" data-search="geo-alt-fill">
            <i class="bi bi-geo-alt-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">geo-alt-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-geo-fill' ? 'selected' : '' }}"
             data-value="bi bi-geo-fill" data-search="geo-fill">
            <i class="bi bi-geo-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">geo-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gift' ? 'selected' : '' }}"
             data-value="bi bi-gift" data-search="gift">
            <i class="bi bi-gift" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gift</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gift-fill' ? 'selected' : '' }}"
             data-value="bi bi-gift-fill" data-search="gift-fill">
            <i class="bi bi-gift-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gift-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-git' ? 'selected' : '' }}"
             data-value="bi bi-git" data-search="git">
            <i class="bi bi-git" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">git</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-github' ? 'selected' : '' }}"
             data-value="bi bi-github" data-search="github">
            <i class="bi bi-github" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">github</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gitlab' ? 'selected' : '' }}"
             data-value="bi bi-gitlab" data-search="gitlab">
            <i class="bi bi-gitlab" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gitlab</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe' ? 'selected' : '' }}"
             data-value="bi bi-globe" data-search="globe">
            <i class="bi bi-globe" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-americas' ? 'selected' : '' }}"
             data-value="bi bi-globe-americas" data-search="globe-americas">
            <i class="bi bi-globe-americas" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-americas</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-americas-fill' ? 'selected' : '' }}"
             data-value="bi bi-globe-americas-fill" data-search="globe-americas-fill">
            <i class="bi bi-globe-americas-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-americas-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-asia-australia' ? 'selected' : '' }}"
             data-value="bi bi-globe-asia-australia" data-search="globe-asia-australia">
            <i class="bi bi-globe-asia-australia" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-asia-australia</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-asia-australia-fill' ? 'selected' : '' }}"
             data-value="bi bi-globe-asia-australia-fill" data-search="globe-asia-australia-fill">
            <i class="bi bi-globe-asia-australia-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-asia-australia-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-central-south-asia' ? 'selected' : '' }}"
             data-value="bi bi-globe-central-south-asia" data-search="globe-central-south-asia">
            <i class="bi bi-globe-central-south-asia" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-central-south-asia</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-central-south-asia-fill' ? 'selected' : '' }}"
             data-value="bi bi-globe-central-south-asia-fill" data-search="globe-central-south-asia-fill">
            <i class="bi bi-globe-central-south-asia-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-central-south-asia-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-europe-africa' ? 'selected' : '' }}"
             data-value="bi bi-globe-europe-africa" data-search="globe-europe-africa">
            <i class="bi bi-globe-europe-africa" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-europe-africa</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe-europe-africa-fill' ? 'selected' : '' }}"
             data-value="bi bi-globe-europe-africa-fill" data-search="globe-europe-africa-fill">
            <i class="bi bi-globe-europe-africa-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe-europe-africa-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-globe2' ? 'selected' : '' }}"
             data-value="bi bi-globe2" data-search="globe2">
            <i class="bi bi-globe2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">globe2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-google' ? 'selected' : '' }}"
             data-value="bi bi-google" data-search="google">
            <i class="bi bi-google" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">google</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-google-play' ? 'selected' : '' }}"
             data-value="bi bi-google-play" data-search="google-play">
            <i class="bi bi-google-play" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">google-play</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-gpu-card' ? 'selected' : '' }}"
             data-value="bi bi-gpu-card" data-search="gpu-card">
            <i class="bi bi-gpu-card" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">gpu-card</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-graph-down' ? 'selected' : '' }}"
             data-value="bi bi-graph-down" data-search="graph-down">
            <i class="bi bi-graph-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">graph-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-graph-down-arrow' ? 'selected' : '' }}"
             data-value="bi bi-graph-down-arrow" data-search="graph-down-arrow">
            <i class="bi bi-graph-down-arrow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">graph-down-arrow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-graph-up' ? 'selected' : '' }}"
             data-value="bi bi-graph-up" data-search="graph-up">
            <i class="bi bi-graph-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">graph-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-graph-up-arrow' ? 'selected' : '' }}"
             data-value="bi bi-graph-up-arrow" data-search="graph-up-arrow">
            <i class="bi bi-graph-up-arrow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">graph-up-arrow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid' ? 'selected' : '' }}"
             data-value="bi bi-grid" data-search="grid">
            <i class="bi bi-grid" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-1x2' ? 'selected' : '' }}"
             data-value="bi bi-grid-1x2" data-search="grid-1x2">
            <i class="bi bi-grid-1x2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-1x2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-1x2-fill' ? 'selected' : '' }}"
             data-value="bi bi-grid-1x2-fill" data-search="grid-1x2-fill">
            <i class="bi bi-grid-1x2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-1x2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x2' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x2" data-search="grid-3x2">
            <i class="bi bi-grid-3x2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x2-gap' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x2-gap" data-search="grid-3x2-gap">
            <i class="bi bi-grid-3x2-gap" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x2-gap</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x2-gap-fill' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x2-gap-fill" data-search="grid-3x2-gap-fill">
            <i class="bi bi-grid-3x2-gap-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x2-gap-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x3' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x3" data-search="grid-3x3">
            <i class="bi bi-grid-3x3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x3-gap' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x3-gap" data-search="grid-3x3-gap">
            <i class="bi bi-grid-3x3-gap" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x3-gap</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-3x3-gap-fill' ? 'selected' : '' }}"
             data-value="bi bi-grid-3x3-gap-fill" data-search="grid-3x3-gap-fill">
            <i class="bi bi-grid-3x3-gap-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-3x3-gap-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grid-fill' ? 'selected' : '' }}"
             data-value="bi bi-grid-fill" data-search="grid-fill">
            <i class="bi bi-grid-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grid-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grip-horizontal' ? 'selected' : '' }}"
             data-value="bi bi-grip-horizontal" data-search="grip-horizontal">
            <i class="bi bi-grip-horizontal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grip-horizontal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-grip-vertical' ? 'selected' : '' }}"
             data-value="bi bi-grip-vertical" data-search="grip-vertical">
            <i class="bi bi-grip-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">grip-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-h-circle' ? 'selected' : '' }}"
             data-value="bi bi-h-circle" data-search="h-circle">
            <i class="bi bi-h-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">h-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-h-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-h-circle-fill" data-search="h-circle-fill">
            <i class="bi bi-h-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">h-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-h-square' ? 'selected' : '' }}"
             data-value="bi bi-h-square" data-search="h-square">
            <i class="bi bi-h-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">h-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-h-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-h-square-fill" data-search="h-square-fill">
            <i class="bi bi-h-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">h-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hammer' ? 'selected' : '' }}"
             data-value="bi bi-hammer" data-search="hammer">
            <i class="bi bi-hammer" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hammer</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-index' ? 'selected' : '' }}"
             data-value="bi bi-hand-index" data-search="hand-index">
            <i class="bi bi-hand-index" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-index</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-index-fill' ? 'selected' : '' }}"
             data-value="bi bi-hand-index-fill" data-search="hand-index-fill">
            <i class="bi bi-hand-index-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-index-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-index-thumb' ? 'selected' : '' }}"
             data-value="bi bi-hand-index-thumb" data-search="hand-index-thumb">
            <i class="bi bi-hand-index-thumb" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-index-thumb</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-index-thumb-fill' ? 'selected' : '' }}"
             data-value="bi bi-hand-index-thumb-fill" data-search="hand-index-thumb-fill">
            <i class="bi bi-hand-index-thumb-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-index-thumb-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-thumbs-down' ? 'selected' : '' }}"
             data-value="bi bi-hand-thumbs-down" data-search="hand-thumbs-down">
            <i class="bi bi-hand-thumbs-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-thumbs-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-thumbs-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-hand-thumbs-down-fill" data-search="hand-thumbs-down-fill">
            <i class="bi bi-hand-thumbs-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-thumbs-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-thumbs-up' ? 'selected' : '' }}"
             data-value="bi bi-hand-thumbs-up" data-search="hand-thumbs-up">
            <i class="bi bi-hand-thumbs-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-thumbs-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hand-thumbs-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-hand-thumbs-up-fill" data-search="hand-thumbs-up-fill">
            <i class="bi bi-hand-thumbs-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hand-thumbs-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-handbag' ? 'selected' : '' }}"
             data-value="bi bi-handbag" data-search="handbag">
            <i class="bi bi-handbag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">handbag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-handbag-fill' ? 'selected' : '' }}"
             data-value="bi bi-handbag-fill" data-search="handbag-fill">
            <i class="bi bi-handbag-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">handbag-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hash' ? 'selected' : '' }}"
             data-value="bi bi-hash" data-search="hash">
            <i class="bi bi-hash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd' ? 'selected' : '' }}"
             data-value="bi bi-hdd" data-search="hdd">
            <i class="bi bi-hdd" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-fill' ? 'selected' : '' }}"
             data-value="bi bi-hdd-fill" data-search="hdd-fill">
            <i class="bi bi-hdd-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-network' ? 'selected' : '' }}"
             data-value="bi bi-hdd-network" data-search="hdd-network">
            <i class="bi bi-hdd-network" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-network</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-network-fill' ? 'selected' : '' }}"
             data-value="bi bi-hdd-network-fill" data-search="hdd-network-fill">
            <i class="bi bi-hdd-network-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-network-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-rack' ? 'selected' : '' }}"
             data-value="bi bi-hdd-rack" data-search="hdd-rack">
            <i class="bi bi-hdd-rack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-rack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-rack-fill' ? 'selected' : '' }}"
             data-value="bi bi-hdd-rack-fill" data-search="hdd-rack-fill">
            <i class="bi bi-hdd-rack-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-rack-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-stack' ? 'selected' : '' }}"
             data-value="bi bi-hdd-stack" data-search="hdd-stack">
            <i class="bi bi-hdd-stack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-stack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdd-stack-fill' ? 'selected' : '' }}"
             data-value="bi bi-hdd-stack-fill" data-search="hdd-stack-fill">
            <i class="bi bi-hdd-stack-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdd-stack-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdmi' ? 'selected' : '' }}"
             data-value="bi bi-hdmi" data-search="hdmi">
            <i class="bi bi-hdmi" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdmi</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hdmi-fill' ? 'selected' : '' }}"
             data-value="bi bi-hdmi-fill" data-search="hdmi-fill">
            <i class="bi bi-hdmi-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hdmi-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-headphones' ? 'selected' : '' }}"
             data-value="bi bi-headphones" data-search="headphones">
            <i class="bi bi-headphones" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">headphones</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-headset' ? 'selected' : '' }}"
             data-value="bi bi-headset" data-search="headset">
            <i class="bi bi-headset" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">headset</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-headset-vr' ? 'selected' : '' }}"
             data-value="bi bi-headset-vr" data-search="headset-vr">
            <i class="bi bi-headset-vr" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">headset-vr</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart' ? 'selected' : '' }}"
             data-value="bi bi-heart" data-search="heart">
            <i class="bi bi-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart-arrow' ? 'selected' : '' }}"
             data-value="bi bi-heart-arrow" data-search="heart-arrow">
            <i class="bi bi-heart-arrow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart-arrow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-heart-fill" data-search="heart-fill">
            <i class="bi bi-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart-half' ? 'selected' : '' }}"
             data-value="bi bi-heart-half" data-search="heart-half">
            <i class="bi bi-heart-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart-pulse' ? 'selected' : '' }}"
             data-value="bi bi-heart-pulse" data-search="heart-pulse">
            <i class="bi bi-heart-pulse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart-pulse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heart-pulse-fill' ? 'selected' : '' }}"
             data-value="bi bi-heart-pulse-fill" data-search="heart-pulse-fill">
            <i class="bi bi-heart-pulse-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heart-pulse-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heartbreak' ? 'selected' : '' }}"
             data-value="bi bi-heartbreak" data-search="heartbreak">
            <i class="bi bi-heartbreak" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heartbreak</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heartbreak-fill' ? 'selected' : '' }}"
             data-value="bi bi-heartbreak-fill" data-search="heartbreak-fill">
            <i class="bi bi-heartbreak-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heartbreak-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hearts' ? 'selected' : '' }}"
             data-value="bi bi-hearts" data-search="hearts">
            <i class="bi bi-hearts" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hearts</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heptagon' ? 'selected' : '' }}"
             data-value="bi bi-heptagon" data-search="heptagon">
            <i class="bi bi-heptagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heptagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heptagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-heptagon-fill" data-search="heptagon-fill">
            <i class="bi bi-heptagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heptagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-heptagon-half' ? 'selected' : '' }}"
             data-value="bi bi-heptagon-half" data-search="heptagon-half">
            <i class="bi bi-heptagon-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">heptagon-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hexagon' ? 'selected' : '' }}"
             data-value="bi bi-hexagon" data-search="hexagon">
            <i class="bi bi-hexagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hexagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hexagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-hexagon-fill" data-search="hexagon-fill">
            <i class="bi bi-hexagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hexagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hexagon-half' ? 'selected' : '' }}"
             data-value="bi bi-hexagon-half" data-search="hexagon-half">
            <i class="bi bi-hexagon-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hexagon-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-highlighter' ? 'selected' : '' }}"
             data-value="bi bi-highlighter" data-search="highlighter">
            <i class="bi bi-highlighter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">highlighter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-highlights' ? 'selected' : '' }}"
             data-value="bi bi-highlights" data-search="highlights">
            <i class="bi bi-highlights" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">highlights</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hospital' ? 'selected' : '' }}"
             data-value="bi bi-hospital" data-search="hospital">
            <i class="bi bi-hospital" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hospital</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hospital-fill' ? 'selected' : '' }}"
             data-value="bi bi-hospital-fill" data-search="hospital-fill">
            <i class="bi bi-hospital-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hospital-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hourglass' ? 'selected' : '' }}"
             data-value="bi bi-hourglass" data-search="hourglass">
            <i class="bi bi-hourglass" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hourglass</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hourglass-bottom' ? 'selected' : '' }}"
             data-value="bi bi-hourglass-bottom" data-search="hourglass-bottom">
            <i class="bi bi-hourglass-bottom" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hourglass-bottom</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hourglass-split' ? 'selected' : '' }}"
             data-value="bi bi-hourglass-split" data-search="hourglass-split">
            <i class="bi bi-hourglass-split" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hourglass-split</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hourglass-top' ? 'selected' : '' }}"
             data-value="bi bi-hourglass-top" data-search="hourglass-top">
            <i class="bi bi-hourglass-top" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hourglass-top</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house' ? 'selected' : '' }}"
             data-value="bi bi-house" data-search="house">
            <i class="bi bi-house" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-add' ? 'selected' : '' }}"
             data-value="bi bi-house-add" data-search="house-add">
            <i class="bi bi-house-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-add-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-add-fill" data-search="house-add-fill">
            <i class="bi bi-house-add-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-add-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-check' ? 'selected' : '' }}"
             data-value="bi bi-house-check" data-search="house-check">
            <i class="bi bi-house-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-check-fill" data-search="house-check-fill">
            <i class="bi bi-house-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-dash' ? 'selected' : '' }}"
             data-value="bi bi-house-dash" data-search="house-dash">
            <i class="bi bi-house-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-dash-fill" data-search="house-dash-fill">
            <i class="bi bi-house-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-door' ? 'selected' : '' }}"
             data-value="bi bi-house-door" data-search="house-door">
            <i class="bi bi-house-door" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-door</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-door-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-door-fill" data-search="house-door-fill">
            <i class="bi bi-house-door-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-door-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-down' ? 'selected' : '' }}"
             data-value="bi bi-house-down" data-search="house-down">
            <i class="bi bi-house-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-down-fill" data-search="house-down-fill">
            <i class="bi bi-house-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-house-exclamation" data-search="house-exclamation">
            <i class="bi bi-house-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-exclamation-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-exclamation-fill" data-search="house-exclamation-fill">
            <i class="bi bi-house-exclamation-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-exclamation-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-fill" data-search="house-fill">
            <i class="bi bi-house-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-gear' ? 'selected' : '' }}"
             data-value="bi bi-house-gear" data-search="house-gear">
            <i class="bi bi-house-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-gear-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-gear-fill" data-search="house-gear-fill">
            <i class="bi bi-house-gear-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-gear-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-heart' ? 'selected' : '' }}"
             data-value="bi bi-house-heart" data-search="house-heart">
            <i class="bi bi-house-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-heart-fill" data-search="house-heart-fill">
            <i class="bi bi-house-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-lock' ? 'selected' : '' }}"
             data-value="bi bi-house-lock" data-search="house-lock">
            <i class="bi bi-house-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-lock-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-lock-fill" data-search="house-lock-fill">
            <i class="bi bi-house-lock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-lock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-slash' ? 'selected' : '' }}"
             data-value="bi bi-house-slash" data-search="house-slash">
            <i class="bi bi-house-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-slash-fill" data-search="house-slash-fill">
            <i class="bi bi-house-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-up' ? 'selected' : '' }}"
             data-value="bi bi-house-up" data-search="house-up">
            <i class="bi bi-house-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-up-fill" data-search="house-up-fill">
            <i class="bi bi-house-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-x' ? 'selected' : '' }}"
             data-value="bi bi-house-x" data-search="house-x">
            <i class="bi bi-house-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-house-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-house-x-fill" data-search="house-x-fill">
            <i class="bi bi-house-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">house-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-houses' ? 'selected' : '' }}"
             data-value="bi bi-houses" data-search="houses">
            <i class="bi bi-houses" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">houses</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-houses-fill' ? 'selected' : '' }}"
             data-value="bi bi-houses-fill" data-search="houses-fill">
            <i class="bi bi-houses-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">houses-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hr' ? 'selected' : '' }}"
             data-value="bi bi-hr" data-search="hr">
            <i class="bi bi-hr" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hr</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hurricane' ? 'selected' : '' }}"
             data-value="bi bi-hurricane" data-search="hurricane">
            <i class="bi bi-hurricane" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hurricane</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-hypnotize' ? 'selected' : '' }}"
             data-value="bi bi-hypnotize" data-search="hypnotize">
            <i class="bi bi-hypnotize" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">hypnotize</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-image' ? 'selected' : '' }}"
             data-value="bi bi-image" data-search="image">
            <i class="bi bi-image" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">image</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-image-alt' ? 'selected' : '' }}"
             data-value="bi bi-image-alt" data-search="image-alt">
            <i class="bi bi-image-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">image-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-image-fill' ? 'selected' : '' }}"
             data-value="bi bi-image-fill" data-search="image-fill">
            <i class="bi bi-image-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">image-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-images' ? 'selected' : '' }}"
             data-value="bi bi-images" data-search="images">
            <i class="bi bi-images" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">images</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-inbox' ? 'selected' : '' }}"
             data-value="bi bi-inbox" data-search="inbox">
            <i class="bi bi-inbox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">inbox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-inbox-fill' ? 'selected' : '' }}"
             data-value="bi bi-inbox-fill" data-search="inbox-fill">
            <i class="bi bi-inbox-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">inbox-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-inboxes' ? 'selected' : '' }}"
             data-value="bi bi-inboxes" data-search="inboxes">
            <i class="bi bi-inboxes" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">inboxes</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-inboxes-fill' ? 'selected' : '' }}"
             data-value="bi bi-inboxes-fill" data-search="inboxes-fill">
            <i class="bi bi-inboxes-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">inboxes-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-incognito' ? 'selected' : '' }}"
             data-value="bi bi-incognito" data-search="incognito">
            <i class="bi bi-incognito" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">incognito</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-indent' ? 'selected' : '' }}"
             data-value="bi bi-indent" data-search="indent">
            <i class="bi bi-indent" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">indent</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-infinity' ? 'selected' : '' }}"
             data-value="bi bi-infinity" data-search="infinity">
            <i class="bi bi-infinity" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">infinity</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info' ? 'selected' : '' }}"
             data-value="bi bi-info" data-search="info">
            <i class="bi bi-info" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info-circle' ? 'selected' : '' }}"
             data-value="bi bi-info-circle" data-search="info-circle">
            <i class="bi bi-info-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-info-circle-fill" data-search="info-circle-fill">
            <i class="bi bi-info-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info-lg' ? 'selected' : '' }}"
             data-value="bi bi-info-lg" data-search="info-lg">
            <i class="bi bi-info-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info-square' ? 'selected' : '' }}"
             data-value="bi bi-info-square" data-search="info-square">
            <i class="bi bi-info-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-info-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-info-square-fill" data-search="info-square-fill">
            <i class="bi bi-info-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">info-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-input-cursor' ? 'selected' : '' }}"
             data-value="bi bi-input-cursor" data-search="input-cursor">
            <i class="bi bi-input-cursor" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">input-cursor</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-input-cursor-text' ? 'selected' : '' }}"
             data-value="bi bi-input-cursor-text" data-search="input-cursor-text">
            <i class="bi bi-input-cursor-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">input-cursor-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-instagram' ? 'selected' : '' }}"
             data-value="bi bi-instagram" data-search="instagram">
            <i class="bi bi-instagram" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">instagram</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-intersect' ? 'selected' : '' }}"
             data-value="bi bi-intersect" data-search="intersect">
            <i class="bi bi-intersect" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">intersect</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-javascript' ? 'selected' : '' }}"
             data-value="bi bi-javascript" data-search="javascript">
            <i class="bi bi-javascript" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">javascript</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal' ? 'selected' : '' }}"
             data-value="bi bi-journal" data-search="journal">
            <i class="bi bi-journal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-album' ? 'selected' : '' }}"
             data-value="bi bi-journal-album" data-search="journal-album">
            <i class="bi bi-journal-album" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-album</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-journal-arrow-down" data-search="journal-arrow-down">
            <i class="bi bi-journal-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-journal-arrow-up" data-search="journal-arrow-up">
            <i class="bi bi-journal-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-bookmark' ? 'selected' : '' }}"
             data-value="bi bi-journal-bookmark" data-search="journal-bookmark">
            <i class="bi bi-journal-bookmark" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-bookmark</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-bookmark-fill' ? 'selected' : '' }}"
             data-value="bi bi-journal-bookmark-fill" data-search="journal-bookmark-fill">
            <i class="bi bi-journal-bookmark-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-bookmark-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-check' ? 'selected' : '' }}"
             data-value="bi bi-journal-check" data-search="journal-check">
            <i class="bi bi-journal-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-code' ? 'selected' : '' }}"
             data-value="bi bi-journal-code" data-search="journal-code">
            <i class="bi bi-journal-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-code</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-medical' ? 'selected' : '' }}"
             data-value="bi bi-journal-medical" data-search="journal-medical">
            <i class="bi bi-journal-medical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-medical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-minus' ? 'selected' : '' }}"
             data-value="bi bi-journal-minus" data-search="journal-minus">
            <i class="bi bi-journal-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-plus' ? 'selected' : '' }}"
             data-value="bi bi-journal-plus" data-search="journal-plus">
            <i class="bi bi-journal-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-richtext' ? 'selected' : '' }}"
             data-value="bi bi-journal-richtext" data-search="journal-richtext">
            <i class="bi bi-journal-richtext" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-richtext</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-text' ? 'selected' : '' }}"
             data-value="bi bi-journal-text" data-search="journal-text">
            <i class="bi bi-journal-text" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-text</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journal-x' ? 'selected' : '' }}"
             data-value="bi bi-journal-x" data-search="journal-x">
            <i class="bi bi-journal-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journal-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-journals' ? 'selected' : '' }}"
             data-value="bi bi-journals" data-search="journals">
            <i class="bi bi-journals" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">journals</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-joystick' ? 'selected' : '' }}"
             data-value="bi bi-joystick" data-search="joystick">
            <i class="bi bi-joystick" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">joystick</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-justify' ? 'selected' : '' }}"
             data-value="bi bi-justify" data-search="justify">
            <i class="bi bi-justify" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">justify</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-justify-left' ? 'selected' : '' }}"
             data-value="bi bi-justify-left" data-search="justify-left">
            <i class="bi bi-justify-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">justify-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-justify-right' ? 'selected' : '' }}"
             data-value="bi bi-justify-right" data-search="justify-right">
            <i class="bi bi-justify-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">justify-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-kanban' ? 'selected' : '' }}"
             data-value="bi bi-kanban" data-search="kanban">
            <i class="bi bi-kanban" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">kanban</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-kanban-fill' ? 'selected' : '' }}"
             data-value="bi bi-kanban-fill" data-search="kanban-fill">
            <i class="bi bi-kanban-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">kanban-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-key' ? 'selected' : '' }}"
             data-value="bi bi-key" data-search="key">
            <i class="bi bi-key" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">key</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-key-fill' ? 'selected' : '' }}"
             data-value="bi bi-key-fill" data-search="key-fill">
            <i class="bi bi-key-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">key-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-keyboard' ? 'selected' : '' }}"
             data-value="bi bi-keyboard" data-search="keyboard">
            <i class="bi bi-keyboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">keyboard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-keyboard-fill' ? 'selected' : '' }}"
             data-value="bi bi-keyboard-fill" data-search="keyboard-fill">
            <i class="bi bi-keyboard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">keyboard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ladder' ? 'selected' : '' }}"
             data-value="bi bi-ladder" data-search="ladder">
            <i class="bi bi-ladder" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ladder</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lamp' ? 'selected' : '' }}"
             data-value="bi bi-lamp" data-search="lamp">
            <i class="bi bi-lamp" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lamp</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lamp-fill' ? 'selected' : '' }}"
             data-value="bi bi-lamp-fill" data-search="lamp-fill">
            <i class="bi bi-lamp-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lamp-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-laptop' ? 'selected' : '' }}"
             data-value="bi bi-laptop" data-search="laptop">
            <i class="bi bi-laptop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">laptop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-laptop-fill' ? 'selected' : '' }}"
             data-value="bi bi-laptop-fill" data-search="laptop-fill">
            <i class="bi bi-laptop-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">laptop-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layer-backward' ? 'selected' : '' }}"
             data-value="bi bi-layer-backward" data-search="layer-backward">
            <i class="bi bi-layer-backward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layer-backward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layer-forward' ? 'selected' : '' }}"
             data-value="bi bi-layer-forward" data-search="layer-forward">
            <i class="bi bi-layer-forward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layer-forward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layers' ? 'selected' : '' }}"
             data-value="bi bi-layers" data-search="layers">
            <i class="bi bi-layers" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layers</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layers-fill' ? 'selected' : '' }}"
             data-value="bi bi-layers-fill" data-search="layers-fill">
            <i class="bi bi-layers-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layers-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layers-half' ? 'selected' : '' }}"
             data-value="bi bi-layers-half" data-search="layers-half">
            <i class="bi bi-layers-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layers-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-sidebar' ? 'selected' : '' }}"
             data-value="bi bi-layout-sidebar" data-search="layout-sidebar">
            <i class="bi bi-layout-sidebar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-sidebar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-sidebar-inset' ? 'selected' : '' }}"
             data-value="bi bi-layout-sidebar-inset" data-search="layout-sidebar-inset">
            <i class="bi bi-layout-sidebar-inset" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-sidebar-inset</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-sidebar-inset-reverse' ? 'selected' : '' }}"
             data-value="bi bi-layout-sidebar-inset-reverse" data-search="layout-sidebar-inset-reverse">
            <i class="bi bi-layout-sidebar-inset-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-sidebar-inset-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-sidebar-reverse' ? 'selected' : '' }}"
             data-value="bi bi-layout-sidebar-reverse" data-search="layout-sidebar-reverse">
            <i class="bi bi-layout-sidebar-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-sidebar-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-split' ? 'selected' : '' }}"
             data-value="bi bi-layout-split" data-search="layout-split">
            <i class="bi bi-layout-split" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-split</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-text-sidebar' ? 'selected' : '' }}"
             data-value="bi bi-layout-text-sidebar" data-search="layout-text-sidebar">
            <i class="bi bi-layout-text-sidebar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-text-sidebar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-text-sidebar-reverse' ? 'selected' : '' }}"
             data-value="bi bi-layout-text-sidebar-reverse" data-search="layout-text-sidebar-reverse">
            <i class="bi bi-layout-text-sidebar-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-text-sidebar-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-text-window' ? 'selected' : '' }}"
             data-value="bi bi-layout-text-window" data-search="layout-text-window">
            <i class="bi bi-layout-text-window" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-text-window</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-text-window-reverse' ? 'selected' : '' }}"
             data-value="bi bi-layout-text-window-reverse" data-search="layout-text-window-reverse">
            <i class="bi bi-layout-text-window-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-text-window-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-three-columns' ? 'selected' : '' }}"
             data-value="bi bi-layout-three-columns" data-search="layout-three-columns">
            <i class="bi bi-layout-three-columns" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-three-columns</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-layout-wtf' ? 'selected' : '' }}"
             data-value="bi bi-layout-wtf" data-search="layout-wtf">
            <i class="bi bi-layout-wtf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">layout-wtf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-leaf' ? 'selected' : '' }}"
             data-value="bi bi-leaf" data-search="leaf">
            <i class="bi bi-leaf" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">leaf</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-leaf-fill' ? 'selected' : '' }}"
             data-value="bi bi-leaf-fill" data-search="leaf-fill">
            <i class="bi bi-leaf-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">leaf-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-life-preserver' ? 'selected' : '' }}"
             data-value="bi bi-life-preserver" data-search="life-preserver">
            <i class="bi bi-life-preserver" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">life-preserver</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightbulb' ? 'selected' : '' }}"
             data-value="bi bi-lightbulb" data-search="lightbulb">
            <i class="bi bi-lightbulb" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightbulb</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightbulb-fill' ? 'selected' : '' }}"
             data-value="bi bi-lightbulb-fill" data-search="lightbulb-fill">
            <i class="bi bi-lightbulb-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightbulb-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightbulb-off' ? 'selected' : '' }}"
             data-value="bi bi-lightbulb-off" data-search="lightbulb-off">
            <i class="bi bi-lightbulb-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightbulb-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightbulb-off-fill' ? 'selected' : '' }}"
             data-value="bi bi-lightbulb-off-fill" data-search="lightbulb-off-fill">
            <i class="bi bi-lightbulb-off-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightbulb-off-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightning' ? 'selected' : '' }}"
             data-value="bi bi-lightning" data-search="lightning">
            <i class="bi bi-lightning" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightning</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightning-charge' ? 'selected' : '' }}"
             data-value="bi bi-lightning-charge" data-search="lightning-charge">
            <i class="bi bi-lightning-charge" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightning-charge</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightning-charge-fill' ? 'selected' : '' }}"
             data-value="bi bi-lightning-charge-fill" data-search="lightning-charge-fill">
            <i class="bi bi-lightning-charge-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightning-charge-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lightning-fill' ? 'selected' : '' }}"
             data-value="bi bi-lightning-fill" data-search="lightning-fill">
            <i class="bi bi-lightning-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lightning-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-line' ? 'selected' : '' }}"
             data-value="bi bi-line" data-search="line">
            <i class="bi bi-line" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">line</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-link' ? 'selected' : '' }}"
             data-value="bi bi-link" data-search="link">
            <i class="bi bi-link" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">link</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-link-45deg' ? 'selected' : '' }}"
             data-value="bi bi-link-45deg" data-search="link-45deg">
            <i class="bi bi-link-45deg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">link-45deg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-linkedin' ? 'selected' : '' }}"
             data-value="bi bi-linkedin" data-search="linkedin">
            <i class="bi bi-linkedin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">linkedin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list' ? 'selected' : '' }}"
             data-value="bi bi-list" data-search="list">
            <i class="bi bi-list" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-check' ? 'selected' : '' }}"
             data-value="bi bi-list-check" data-search="list-check">
            <i class="bi bi-list-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-columns' ? 'selected' : '' }}"
             data-value="bi bi-list-columns" data-search="list-columns">
            <i class="bi bi-list-columns" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-columns</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-columns-reverse' ? 'selected' : '' }}"
             data-value="bi bi-list-columns-reverse" data-search="list-columns-reverse">
            <i class="bi bi-list-columns-reverse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-columns-reverse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-nested' ? 'selected' : '' }}"
             data-value="bi bi-list-nested" data-search="list-nested">
            <i class="bi bi-list-nested" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-nested</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-ol' ? 'selected' : '' }}"
             data-value="bi bi-list-ol" data-search="list-ol">
            <i class="bi bi-list-ol" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-ol</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-stars' ? 'selected' : '' }}"
             data-value="bi bi-list-stars" data-search="list-stars">
            <i class="bi bi-list-stars" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-stars</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-task' ? 'selected' : '' }}"
             data-value="bi bi-list-task" data-search="list-task">
            <i class="bi bi-list-task" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-task</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-list-ul' ? 'selected' : '' }}"
             data-value="bi bi-list-ul" data-search="list-ul">
            <i class="bi bi-list-ul" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">list-ul</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lock' ? 'selected' : '' }}"
             data-value="bi bi-lock" data-search="lock">
            <i class="bi bi-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lock-fill' ? 'selected' : '' }}"
             data-value="bi bi-lock-fill" data-search="lock-fill">
            <i class="bi bi-lock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-luggage' ? 'selected' : '' }}"
             data-value="bi bi-luggage" data-search="luggage">
            <i class="bi bi-luggage" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">luggage</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-luggage-fill' ? 'selected' : '' }}"
             data-value="bi bi-luggage-fill" data-search="luggage-fill">
            <i class="bi bi-luggage-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">luggage-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lungs' ? 'selected' : '' }}"
             data-value="bi bi-lungs" data-search="lungs">
            <i class="bi bi-lungs" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lungs</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-lungs-fill' ? 'selected' : '' }}"
             data-value="bi bi-lungs-fill" data-search="lungs-fill">
            <i class="bi bi-lungs-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">lungs-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-magic' ? 'selected' : '' }}"
             data-value="bi bi-magic" data-search="magic">
            <i class="bi bi-magic" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">magic</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-magnet' ? 'selected' : '' }}"
             data-value="bi bi-magnet" data-search="magnet">
            <i class="bi bi-magnet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">magnet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-magnet-fill' ? 'selected' : '' }}"
             data-value="bi bi-magnet-fill" data-search="magnet-fill">
            <i class="bi bi-magnet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">magnet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mailbox' ? 'selected' : '' }}"
             data-value="bi bi-mailbox" data-search="mailbox">
            <i class="bi bi-mailbox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mailbox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mailbox-flag' ? 'selected' : '' }}"
             data-value="bi bi-mailbox-flag" data-search="mailbox-flag">
            <i class="bi bi-mailbox-flag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mailbox-flag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mailbox2' ? 'selected' : '' }}"
             data-value="bi bi-mailbox2" data-search="mailbox2">
            <i class="bi bi-mailbox2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mailbox2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mailbox2-flag' ? 'selected' : '' }}"
             data-value="bi bi-mailbox2-flag" data-search="mailbox2-flag">
            <i class="bi bi-mailbox2-flag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mailbox2-flag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-map' ? 'selected' : '' }}"
             data-value="bi bi-map" data-search="map">
            <i class="bi bi-map" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">map</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-map-fill' ? 'selected' : '' }}"
             data-value="bi bi-map-fill" data-search="map-fill">
            <i class="bi bi-map-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">map-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-markdown' ? 'selected' : '' }}"
             data-value="bi bi-markdown" data-search="markdown">
            <i class="bi bi-markdown" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">markdown</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-markdown-fill' ? 'selected' : '' }}"
             data-value="bi bi-markdown-fill" data-search="markdown-fill">
            <i class="bi bi-markdown-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">markdown-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-marker-tip' ? 'selected' : '' }}"
             data-value="bi bi-marker-tip" data-search="marker-tip">
            <i class="bi bi-marker-tip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">marker-tip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mask' ? 'selected' : '' }}"
             data-value="bi bi-mask" data-search="mask">
            <i class="bi bi-mask" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mask</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mastodon' ? 'selected' : '' }}"
             data-value="bi bi-mastodon" data-search="mastodon">
            <i class="bi bi-mastodon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mastodon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-measuring-cup' ? 'selected' : '' }}"
             data-value="bi bi-measuring-cup" data-search="measuring-cup">
            <i class="bi bi-measuring-cup" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">measuring-cup</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-measuring-cup-fill' ? 'selected' : '' }}"
             data-value="bi bi-measuring-cup-fill" data-search="measuring-cup-fill">
            <i class="bi bi-measuring-cup-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">measuring-cup-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-medium' ? 'selected' : '' }}"
             data-value="bi bi-medium" data-search="medium">
            <i class="bi bi-medium" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">medium</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-megaphone' ? 'selected' : '' }}"
             data-value="bi bi-megaphone" data-search="megaphone">
            <i class="bi bi-megaphone" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">megaphone</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-megaphone-fill' ? 'selected' : '' }}"
             data-value="bi bi-megaphone-fill" data-search="megaphone-fill">
            <i class="bi bi-megaphone-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">megaphone-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-memory' ? 'selected' : '' }}"
             data-value="bi bi-memory" data-search="memory">
            <i class="bi bi-memory" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">memory</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-app' ? 'selected' : '' }}"
             data-value="bi bi-menu-app" data-search="menu-app">
            <i class="bi bi-menu-app" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-app</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-app-fill' ? 'selected' : '' }}"
             data-value="bi bi-menu-app-fill" data-search="menu-app-fill">
            <i class="bi bi-menu-app-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-app-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-button' ? 'selected' : '' }}"
             data-value="bi bi-menu-button" data-search="menu-button">
            <i class="bi bi-menu-button" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-button</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-button-fill' ? 'selected' : '' }}"
             data-value="bi bi-menu-button-fill" data-search="menu-button-fill">
            <i class="bi bi-menu-button-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-button-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-button-wide' ? 'selected' : '' }}"
             data-value="bi bi-menu-button-wide" data-search="menu-button-wide">
            <i class="bi bi-menu-button-wide" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-button-wide</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-button-wide-fill' ? 'selected' : '' }}"
             data-value="bi bi-menu-button-wide-fill" data-search="menu-button-wide-fill">
            <i class="bi bi-menu-button-wide-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-button-wide-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-down' ? 'selected' : '' }}"
             data-value="bi bi-menu-down" data-search="menu-down">
            <i class="bi bi-menu-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-menu-up' ? 'selected' : '' }}"
             data-value="bi bi-menu-up" data-search="menu-up">
            <i class="bi bi-menu-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">menu-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-messenger' ? 'selected' : '' }}"
             data-value="bi bi-messenger" data-search="messenger">
            <i class="bi bi-messenger" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">messenger</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-meta' ? 'selected' : '' }}"
             data-value="bi bi-meta" data-search="meta">
            <i class="bi bi-meta" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">meta</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mic' ? 'selected' : '' }}"
             data-value="bi bi-mic" data-search="mic">
            <i class="bi bi-mic" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mic</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mic-fill' ? 'selected' : '' }}"
             data-value="bi bi-mic-fill" data-search="mic-fill">
            <i class="bi bi-mic-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mic-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mic-mute' ? 'selected' : '' }}"
             data-value="bi bi-mic-mute" data-search="mic-mute">
            <i class="bi bi-mic-mute" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mic-mute</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mic-mute-fill' ? 'selected' : '' }}"
             data-value="bi bi-mic-mute-fill" data-search="mic-mute-fill">
            <i class="bi bi-mic-mute-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mic-mute-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-microsoft' ? 'selected' : '' }}"
             data-value="bi bi-microsoft" data-search="microsoft">
            <i class="bi bi-microsoft" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">microsoft</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-microsoft-teams' ? 'selected' : '' }}"
             data-value="bi bi-microsoft-teams" data-search="microsoft-teams">
            <i class="bi bi-microsoft-teams" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">microsoft-teams</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-minecart' ? 'selected' : '' }}"
             data-value="bi bi-minecart" data-search="minecart">
            <i class="bi bi-minecart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">minecart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-minecart-loaded' ? 'selected' : '' }}"
             data-value="bi bi-minecart-loaded" data-search="minecart-loaded">
            <i class="bi bi-minecart-loaded" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">minecart-loaded</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-modem' ? 'selected' : '' }}"
             data-value="bi bi-modem" data-search="modem">
            <i class="bi bi-modem" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">modem</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-modem-fill' ? 'selected' : '' }}"
             data-value="bi bi-modem-fill" data-search="modem-fill">
            <i class="bi bi-modem-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">modem-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-moisture' ? 'selected' : '' }}"
             data-value="bi bi-moisture" data-search="moisture">
            <i class="bi bi-moisture" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">moisture</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-moon' ? 'selected' : '' }}"
             data-value="bi bi-moon" data-search="moon">
            <i class="bi bi-moon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">moon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-moon-fill' ? 'selected' : '' }}"
             data-value="bi bi-moon-fill" data-search="moon-fill">
            <i class="bi bi-moon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">moon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-moon-stars' ? 'selected' : '' }}"
             data-value="bi bi-moon-stars" data-search="moon-stars">
            <i class="bi bi-moon-stars" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">moon-stars</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-moon-stars-fill' ? 'selected' : '' }}"
             data-value="bi bi-moon-stars-fill" data-search="moon-stars-fill">
            <i class="bi bi-moon-stars-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">moon-stars-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mortarboard' ? 'selected' : '' }}"
             data-value="bi bi-mortarboard" data-search="mortarboard">
            <i class="bi bi-mortarboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mortarboard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mortarboard-fill' ? 'selected' : '' }}"
             data-value="bi bi-mortarboard-fill" data-search="mortarboard-fill">
            <i class="bi bi-mortarboard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mortarboard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-motherboard' ? 'selected' : '' }}"
             data-value="bi bi-motherboard" data-search="motherboard">
            <i class="bi bi-motherboard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">motherboard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-motherboard-fill' ? 'selected' : '' }}"
             data-value="bi bi-motherboard-fill" data-search="motherboard-fill">
            <i class="bi bi-motherboard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">motherboard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse' ? 'selected' : '' }}"
             data-value="bi bi-mouse" data-search="mouse">
            <i class="bi bi-mouse" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse-fill' ? 'selected' : '' }}"
             data-value="bi bi-mouse-fill" data-search="mouse-fill">
            <i class="bi bi-mouse-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse2' ? 'selected' : '' }}"
             data-value="bi bi-mouse2" data-search="mouse2">
            <i class="bi bi-mouse2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse2-fill' ? 'selected' : '' }}"
             data-value="bi bi-mouse2-fill" data-search="mouse2-fill">
            <i class="bi bi-mouse2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse3' ? 'selected' : '' }}"
             data-value="bi bi-mouse3" data-search="mouse3">
            <i class="bi bi-mouse3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-mouse3-fill' ? 'selected' : '' }}"
             data-value="bi bi-mouse3-fill" data-search="mouse3-fill">
            <i class="bi bi-mouse3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">mouse3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-music-note' ? 'selected' : '' }}"
             data-value="bi bi-music-note" data-search="music-note">
            <i class="bi bi-music-note" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">music-note</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-music-note-beamed' ? 'selected' : '' }}"
             data-value="bi bi-music-note-beamed" data-search="music-note-beamed">
            <i class="bi bi-music-note-beamed" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">music-note-beamed</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-music-note-list' ? 'selected' : '' }}"
             data-value="bi bi-music-note-list" data-search="music-note-list">
            <i class="bi bi-music-note-list" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">music-note-list</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-music-player' ? 'selected' : '' }}"
             data-value="bi bi-music-player" data-search="music-player">
            <i class="bi bi-music-player" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">music-player</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-music-player-fill' ? 'selected' : '' }}"
             data-value="bi bi-music-player-fill" data-search="music-player-fill">
            <i class="bi bi-music-player-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">music-player-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-newspaper' ? 'selected' : '' }}"
             data-value="bi bi-newspaper" data-search="newspaper">
            <i class="bi bi-newspaper" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">newspaper</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nintendo-switch' ? 'selected' : '' }}"
             data-value="bi bi-nintendo-switch" data-search="nintendo-switch">
            <i class="bi bi-nintendo-switch" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nintendo-switch</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-node-minus' ? 'selected' : '' }}"
             data-value="bi bi-node-minus" data-search="node-minus">
            <i class="bi bi-node-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">node-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-node-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-node-minus-fill" data-search="node-minus-fill">
            <i class="bi bi-node-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">node-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-node-plus' ? 'selected' : '' }}"
             data-value="bi bi-node-plus" data-search="node-plus">
            <i class="bi bi-node-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">node-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-node-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-node-plus-fill" data-search="node-plus-fill">
            <i class="bi bi-node-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">node-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-noise-reduction' ? 'selected' : '' }}"
             data-value="bi bi-noise-reduction" data-search="noise-reduction">
            <i class="bi bi-noise-reduction" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">noise-reduction</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nut' ? 'selected' : '' }}"
             data-value="bi bi-nut" data-search="nut">
            <i class="bi bi-nut" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nut</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nut-fill' ? 'selected' : '' }}"
             data-value="bi bi-nut-fill" data-search="nut-fill">
            <i class="bi bi-nut-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nut-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nvidia' ? 'selected' : '' }}"
             data-value="bi bi-nvidia" data-search="nvidia">
            <i class="bi bi-nvidia" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nvidia</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nvme' ? 'selected' : '' }}"
             data-value="bi bi-nvme" data-search="nvme">
            <i class="bi bi-nvme" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nvme</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-nvme-fill' ? 'selected' : '' }}"
             data-value="bi bi-nvme-fill" data-search="nvme-fill">
            <i class="bi bi-nvme-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">nvme-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-octagon' ? 'selected' : '' }}"
             data-value="bi bi-octagon" data-search="octagon">
            <i class="bi bi-octagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">octagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-octagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-octagon-fill" data-search="octagon-fill">
            <i class="bi bi-octagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">octagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-octagon-half' ? 'selected' : '' }}"
             data-value="bi bi-octagon-half" data-search="octagon-half">
            <i class="bi bi-octagon-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">octagon-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-openai' ? 'selected' : '' }}"
             data-value="bi bi-openai" data-search="openai">
            <i class="bi bi-openai" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">openai</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-opencollective' ? 'selected' : '' }}"
             data-value="bi bi-opencollective" data-search="opencollective">
            <i class="bi bi-opencollective" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">opencollective</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-optical-audio' ? 'selected' : '' }}"
             data-value="bi bi-optical-audio" data-search="optical-audio">
            <i class="bi bi-optical-audio" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">optical-audio</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-optical-audio-fill' ? 'selected' : '' }}"
             data-value="bi bi-optical-audio-fill" data-search="optical-audio-fill">
            <i class="bi bi-optical-audio-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">optical-audio-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-option' ? 'selected' : '' }}"
             data-value="bi bi-option" data-search="option">
            <i class="bi bi-option" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">option</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-outlet' ? 'selected' : '' }}"
             data-value="bi bi-outlet" data-search="outlet">
            <i class="bi bi-outlet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">outlet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-p-circle' ? 'selected' : '' }}"
             data-value="bi bi-p-circle" data-search="p-circle">
            <i class="bi bi-p-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">p-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-p-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-p-circle-fill" data-search="p-circle-fill">
            <i class="bi bi-p-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">p-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-p-square' ? 'selected' : '' }}"
             data-value="bi bi-p-square" data-search="p-square">
            <i class="bi bi-p-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">p-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-p-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-p-square-fill" data-search="p-square-fill">
            <i class="bi bi-p-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">p-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-paint-bucket' ? 'selected' : '' }}"
             data-value="bi bi-paint-bucket" data-search="paint-bucket">
            <i class="bi bi-paint-bucket" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">paint-bucket</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-palette' ? 'selected' : '' }}"
             data-value="bi bi-palette" data-search="palette">
            <i class="bi bi-palette" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">palette</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-palette-fill' ? 'selected' : '' }}"
             data-value="bi bi-palette-fill" data-search="palette-fill">
            <i class="bi bi-palette-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">palette-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-palette2' ? 'selected' : '' }}"
             data-value="bi bi-palette2" data-search="palette2">
            <i class="bi bi-palette2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">palette2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-paperclip' ? 'selected' : '' }}"
             data-value="bi bi-paperclip" data-search="paperclip">
            <i class="bi bi-paperclip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">paperclip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-paragraph' ? 'selected' : '' }}"
             data-value="bi bi-paragraph" data-search="paragraph">
            <i class="bi bi-paragraph" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">paragraph</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pass' ? 'selected' : '' }}"
             data-value="bi bi-pass" data-search="pass">
            <i class="bi bi-pass" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pass</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pass-fill' ? 'selected' : '' }}"
             data-value="bi bi-pass-fill" data-search="pass-fill">
            <i class="bi bi-pass-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pass-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-passport' ? 'selected' : '' }}"
             data-value="bi bi-passport" data-search="passport">
            <i class="bi bi-passport" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">passport</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-passport-fill' ? 'selected' : '' }}"
             data-value="bi bi-passport-fill" data-search="passport-fill">
            <i class="bi bi-passport-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">passport-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-check' ? 'selected' : '' }}"
             data-value="bi bi-patch-check" data-search="patch-check">
            <i class="bi bi-patch-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-patch-check-fill" data-search="patch-check-fill">
            <i class="bi bi-patch-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-patch-exclamation" data-search="patch-exclamation">
            <i class="bi bi-patch-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-exclamation-fill' ? 'selected' : '' }}"
             data-value="bi bi-patch-exclamation-fill" data-search="patch-exclamation-fill">
            <i class="bi bi-patch-exclamation-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-exclamation-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-minus' ? 'selected' : '' }}"
             data-value="bi bi-patch-minus" data-search="patch-minus">
            <i class="bi bi-patch-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-patch-minus-fill" data-search="patch-minus-fill">
            <i class="bi bi-patch-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-plus' ? 'selected' : '' }}"
             data-value="bi bi-patch-plus" data-search="patch-plus">
            <i class="bi bi-patch-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-patch-plus-fill" data-search="patch-plus-fill">
            <i class="bi bi-patch-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-question' ? 'selected' : '' }}"
             data-value="bi bi-patch-question" data-search="patch-question">
            <i class="bi bi-patch-question" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-question</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-patch-question-fill' ? 'selected' : '' }}"
             data-value="bi bi-patch-question-fill" data-search="patch-question-fill">
            <i class="bi bi-patch-question-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">patch-question-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause' ? 'selected' : '' }}"
             data-value="bi bi-pause" data-search="pause">
            <i class="bi bi-pause" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause-btn' ? 'selected' : '' }}"
             data-value="bi bi-pause-btn" data-search="pause-btn">
            <i class="bi bi-pause-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-pause-btn-fill" data-search="pause-btn-fill">
            <i class="bi bi-pause-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause-circle' ? 'selected' : '' }}"
             data-value="bi bi-pause-circle" data-search="pause-circle">
            <i class="bi bi-pause-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-pause-circle-fill" data-search="pause-circle-fill">
            <i class="bi bi-pause-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pause-fill' ? 'selected' : '' }}"
             data-value="bi bi-pause-fill" data-search="pause-fill">
            <i class="bi bi-pause-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pause-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-paypal' ? 'selected' : '' }}"
             data-value="bi bi-paypal" data-search="paypal">
            <i class="bi bi-paypal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">paypal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pc' ? 'selected' : '' }}"
             data-value="bi bi-pc" data-search="pc">
            <i class="bi bi-pc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pc-display' ? 'selected' : '' }}"
             data-value="bi bi-pc-display" data-search="pc-display">
            <i class="bi bi-pc-display" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pc-display</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pc-display-horizontal' ? 'selected' : '' }}"
             data-value="bi bi-pc-display-horizontal" data-search="pc-display-horizontal">
            <i class="bi bi-pc-display-horizontal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pc-display-horizontal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pc-horizontal' ? 'selected' : '' }}"
             data-value="bi bi-pc-horizontal" data-search="pc-horizontal">
            <i class="bi bi-pc-horizontal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pc-horizontal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pci-card' ? 'selected' : '' }}"
             data-value="bi bi-pci-card" data-search="pci-card">
            <i class="bi bi-pci-card" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pci-card</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pci-card-network' ? 'selected' : '' }}"
             data-value="bi bi-pci-card-network" data-search="pci-card-network">
            <i class="bi bi-pci-card-network" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pci-card-network</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pci-card-sound' ? 'selected' : '' }}"
             data-value="bi bi-pci-card-sound" data-search="pci-card-sound">
            <i class="bi bi-pci-card-sound" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pci-card-sound</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-peace' ? 'selected' : '' }}"
             data-value="bi bi-peace" data-search="peace">
            <i class="bi bi-peace" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">peace</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-peace-fill' ? 'selected' : '' }}"
             data-value="bi bi-peace-fill" data-search="peace-fill">
            <i class="bi bi-peace-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">peace-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pen' ? 'selected' : '' }}"
             data-value="bi bi-pen" data-search="pen">
            <i class="bi bi-pen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pen-fill' ? 'selected' : '' }}"
             data-value="bi bi-pen-fill" data-search="pen-fill">
            <i class="bi bi-pen-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pen-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pencil' ? 'selected' : '' }}"
             data-value="bi bi-pencil" data-search="pencil">
            <i class="bi bi-pencil" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pencil</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pencil-fill' ? 'selected' : '' }}"
             data-value="bi bi-pencil-fill" data-search="pencil-fill">
            <i class="bi bi-pencil-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pencil-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pencil-square' ? 'selected' : '' }}"
             data-value="bi bi-pencil-square" data-search="pencil-square">
            <i class="bi bi-pencil-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pencil-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pentagon' ? 'selected' : '' }}"
             data-value="bi bi-pentagon" data-search="pentagon">
            <i class="bi bi-pentagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pentagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pentagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-pentagon-fill" data-search="pentagon-fill">
            <i class="bi bi-pentagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pentagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pentagon-half' ? 'selected' : '' }}"
             data-value="bi bi-pentagon-half" data-search="pentagon-half">
            <i class="bi bi-pentagon-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pentagon-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-people' ? 'selected' : '' }}"
             data-value="bi bi-people" data-search="people">
            <i class="bi bi-people" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">people</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-people-fill' ? 'selected' : '' }}"
             data-value="bi bi-people-fill" data-search="people-fill">
            <i class="bi bi-people-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">people-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-percent' ? 'selected' : '' }}"
             data-value="bi bi-percent" data-search="percent">
            <i class="bi bi-percent" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">percent</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-perplexity' ? 'selected' : '' }}"
             data-value="bi bi-perplexity" data-search="perplexity">
            <i class="bi bi-perplexity" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">perplexity</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person' ? 'selected' : '' }}"
             data-value="bi bi-person" data-search="person">
            <i class="bi bi-person" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-add' ? 'selected' : '' }}"
             data-value="bi bi-person-add" data-search="person-add">
            <i class="bi bi-person-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-arms-up' ? 'selected' : '' }}"
             data-value="bi bi-person-arms-up" data-search="person-arms-up">
            <i class="bi bi-person-arms-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-arms-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-badge' ? 'selected' : '' }}"
             data-value="bi bi-person-badge" data-search="person-badge">
            <i class="bi bi-person-badge" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-badge</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-badge-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-badge-fill" data-search="person-badge-fill">
            <i class="bi bi-person-badge-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-badge-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-bounding-box' ? 'selected' : '' }}"
             data-value="bi bi-person-bounding-box" data-search="person-bounding-box">
            <i class="bi bi-person-bounding-box" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-bounding-box</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-check' ? 'selected' : '' }}"
             data-value="bi bi-person-check" data-search="person-check">
            <i class="bi bi-person-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-check-fill" data-search="person-check-fill">
            <i class="bi bi-person-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-circle' ? 'selected' : '' }}"
             data-value="bi bi-person-circle" data-search="person-circle">
            <i class="bi bi-person-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-dash' ? 'selected' : '' }}"
             data-value="bi bi-person-dash" data-search="person-dash">
            <i class="bi bi-person-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-dash-fill" data-search="person-dash-fill">
            <i class="bi bi-person-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-down' ? 'selected' : '' }}"
             data-value="bi bi-person-down" data-search="person-down">
            <i class="bi bi-person-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-person-exclamation" data-search="person-exclamation">
            <i class="bi bi-person-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-fill" data-search="person-fill">
            <i class="bi bi-person-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-add' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-add" data-search="person-fill-add">
            <i class="bi bi-person-fill-add" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-add</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-check' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-check" data-search="person-fill-check">
            <i class="bi bi-person-fill-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-dash' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-dash" data-search="person-fill-dash">
            <i class="bi bi-person-fill-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-down' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-down" data-search="person-fill-down">
            <i class="bi bi-person-fill-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-exclamation" data-search="person-fill-exclamation">
            <i class="bi bi-person-fill-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-gear' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-gear" data-search="person-fill-gear">
            <i class="bi bi-person-fill-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-lock' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-lock" data-search="person-fill-lock">
            <i class="bi bi-person-fill-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-slash' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-slash" data-search="person-fill-slash">
            <i class="bi bi-person-fill-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-up' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-up" data-search="person-fill-up">
            <i class="bi bi-person-fill-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-fill-x' ? 'selected' : '' }}"
             data-value="bi bi-person-fill-x" data-search="person-fill-x">
            <i class="bi bi-person-fill-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-fill-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-gear' ? 'selected' : '' }}"
             data-value="bi bi-person-gear" data-search="person-gear">
            <i class="bi bi-person-gear" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-gear</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-heart' ? 'selected' : '' }}"
             data-value="bi bi-person-heart" data-search="person-heart">
            <i class="bi bi-person-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-hearts' ? 'selected' : '' }}"
             data-value="bi bi-person-hearts" data-search="person-hearts">
            <i class="bi bi-person-hearts" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-hearts</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-lines-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-lines-fill" data-search="person-lines-fill">
            <i class="bi bi-person-lines-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-lines-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-lock' ? 'selected' : '' }}"
             data-value="bi bi-person-lock" data-search="person-lock">
            <i class="bi bi-person-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-plus' ? 'selected' : '' }}"
             data-value="bi bi-person-plus" data-search="person-plus">
            <i class="bi bi-person-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-plus-fill" data-search="person-plus-fill">
            <i class="bi bi-person-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-raised-hand' ? 'selected' : '' }}"
             data-value="bi bi-person-raised-hand" data-search="person-raised-hand">
            <i class="bi bi-person-raised-hand" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-raised-hand</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-rolodex' ? 'selected' : '' }}"
             data-value="bi bi-person-rolodex" data-search="person-rolodex">
            <i class="bi bi-person-rolodex" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-rolodex</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-slash' ? 'selected' : '' }}"
             data-value="bi bi-person-slash" data-search="person-slash">
            <i class="bi bi-person-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-square' ? 'selected' : '' }}"
             data-value="bi bi-person-square" data-search="person-square">
            <i class="bi bi-person-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-standing' ? 'selected' : '' }}"
             data-value="bi bi-person-standing" data-search="person-standing">
            <i class="bi bi-person-standing" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-standing</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-standing-dress' ? 'selected' : '' }}"
             data-value="bi bi-person-standing-dress" data-search="person-standing-dress">
            <i class="bi bi-person-standing-dress" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-standing-dress</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-up' ? 'selected' : '' }}"
             data-value="bi bi-person-up" data-search="person-up">
            <i class="bi bi-person-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-vcard' ? 'selected' : '' }}"
             data-value="bi bi-person-vcard" data-search="person-vcard">
            <i class="bi bi-person-vcard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-vcard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-vcard-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-vcard-fill" data-search="person-vcard-fill">
            <i class="bi bi-person-vcard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-vcard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-video' ? 'selected' : '' }}"
             data-value="bi bi-person-video" data-search="person-video">
            <i class="bi bi-person-video" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-video</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-video2' ? 'selected' : '' }}"
             data-value="bi bi-person-video2" data-search="person-video2">
            <i class="bi bi-person-video2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-video2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-video3' ? 'selected' : '' }}"
             data-value="bi bi-person-video3" data-search="person-video3">
            <i class="bi bi-person-video3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-video3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-walking' ? 'selected' : '' }}"
             data-value="bi bi-person-walking" data-search="person-walking">
            <i class="bi bi-person-walking" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-walking</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-wheelchair' ? 'selected' : '' }}"
             data-value="bi bi-person-wheelchair" data-search="person-wheelchair">
            <i class="bi bi-person-wheelchair" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-wheelchair</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-workspace' ? 'selected' : '' }}"
             data-value="bi bi-person-workspace" data-search="person-workspace">
            <i class="bi bi-person-workspace" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-workspace</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-x' ? 'selected' : '' }}"
             data-value="bi bi-person-x" data-search="person-x">
            <i class="bi bi-person-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-person-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-person-x-fill" data-search="person-x-fill">
            <i class="bi bi-person-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">person-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone' ? 'selected' : '' }}"
             data-value="bi bi-phone" data-search="phone">
            <i class="bi bi-phone" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-fill' ? 'selected' : '' }}"
             data-value="bi bi-phone-fill" data-search="phone-fill">
            <i class="bi bi-phone-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-flip' ? 'selected' : '' }}"
             data-value="bi bi-phone-flip" data-search="phone-flip">
            <i class="bi bi-phone-flip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-flip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-landscape' ? 'selected' : '' }}"
             data-value="bi bi-phone-landscape" data-search="phone-landscape">
            <i class="bi bi-phone-landscape" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-landscape</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-landscape-fill' ? 'selected' : '' }}"
             data-value="bi bi-phone-landscape-fill" data-search="phone-landscape-fill">
            <i class="bi bi-phone-landscape-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-landscape-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-vibrate' ? 'selected' : '' }}"
             data-value="bi bi-phone-vibrate" data-search="phone-vibrate">
            <i class="bi bi-phone-vibrate" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-vibrate</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-phone-vibrate-fill' ? 'selected' : '' }}"
             data-value="bi bi-phone-vibrate-fill" data-search="phone-vibrate-fill">
            <i class="bi bi-phone-vibrate-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">phone-vibrate-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pie-chart' ? 'selected' : '' }}"
             data-value="bi bi-pie-chart" data-search="pie-chart">
            <i class="bi bi-pie-chart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pie-chart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pie-chart-fill' ? 'selected' : '' }}"
             data-value="bi bi-pie-chart-fill" data-search="pie-chart-fill">
            <i class="bi bi-pie-chart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pie-chart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-piggy-bank' ? 'selected' : '' }}"
             data-value="bi bi-piggy-bank" data-search="piggy-bank">
            <i class="bi bi-piggy-bank" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">piggy-bank</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-piggy-bank-fill' ? 'selected' : '' }}"
             data-value="bi bi-piggy-bank-fill" data-search="piggy-bank-fill">
            <i class="bi bi-piggy-bank-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">piggy-bank-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin' ? 'selected' : '' }}"
             data-value="bi bi-pin" data-search="pin">
            <i class="bi bi-pin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin-angle' ? 'selected' : '' }}"
             data-value="bi bi-pin-angle" data-search="pin-angle">
            <i class="bi bi-pin-angle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin-angle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin-angle-fill' ? 'selected' : '' }}"
             data-value="bi bi-pin-angle-fill" data-search="pin-angle-fill">
            <i class="bi bi-pin-angle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin-angle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin-fill' ? 'selected' : '' }}"
             data-value="bi bi-pin-fill" data-search="pin-fill">
            <i class="bi bi-pin-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin-map' ? 'selected' : '' }}"
             data-value="bi bi-pin-map" data-search="pin-map">
            <i class="bi bi-pin-map" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin-map</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pin-map-fill' ? 'selected' : '' }}"
             data-value="bi bi-pin-map-fill" data-search="pin-map-fill">
            <i class="bi bi-pin-map-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pin-map-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pinterest' ? 'selected' : '' }}"
             data-value="bi bi-pinterest" data-search="pinterest">
            <i class="bi bi-pinterest" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pinterest</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pip' ? 'selected' : '' }}"
             data-value="bi bi-pip" data-search="pip">
            <i class="bi bi-pip" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pip</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-pip-fill' ? 'selected' : '' }}"
             data-value="bi bi-pip-fill" data-search="pip-fill">
            <i class="bi bi-pip-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">pip-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play' ? 'selected' : '' }}"
             data-value="bi bi-play" data-search="play">
            <i class="bi bi-play" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play-btn' ? 'selected' : '' }}"
             data-value="bi bi-play-btn" data-search="play-btn">
            <i class="bi bi-play-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-play-btn-fill" data-search="play-btn-fill">
            <i class="bi bi-play-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play-circle' ? 'selected' : '' }}"
             data-value="bi bi-play-circle" data-search="play-circle">
            <i class="bi bi-play-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-play-circle-fill" data-search="play-circle-fill">
            <i class="bi bi-play-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-play-fill' ? 'selected' : '' }}"
             data-value="bi bi-play-fill" data-search="play-fill">
            <i class="bi bi-play-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">play-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-playstation' ? 'selected' : '' }}"
             data-value="bi bi-playstation" data-search="playstation">
            <i class="bi bi-playstation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">playstation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plug' ? 'selected' : '' }}"
             data-value="bi bi-plug" data-search="plug">
            <i class="bi bi-plug" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plug</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plug-fill' ? 'selected' : '' }}"
             data-value="bi bi-plug-fill" data-search="plug-fill">
            <i class="bi bi-plug-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plug-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plugin' ? 'selected' : '' }}"
             data-value="bi bi-plugin" data-search="plugin">
            <i class="bi bi-plugin" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plugin</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus' ? 'selected' : '' }}"
             data-value="bi bi-plus" data-search="plus">
            <i class="bi bi-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-circle' ? 'selected' : '' }}"
             data-value="bi bi-plus-circle" data-search="plus-circle">
            <i class="bi bi-plus-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-circle-dotted' ? 'selected' : '' }}"
             data-value="bi bi-plus-circle-dotted" data-search="plus-circle-dotted">
            <i class="bi bi-plus-circle-dotted" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-circle-dotted</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-plus-circle-fill" data-search="plus-circle-fill">
            <i class="bi bi-plus-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-lg' ? 'selected' : '' }}"
             data-value="bi bi-plus-lg" data-search="plus-lg">
            <i class="bi bi-plus-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-slash-minus' ? 'selected' : '' }}"
             data-value="bi bi-plus-slash-minus" data-search="plus-slash-minus">
            <i class="bi bi-plus-slash-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-slash-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-square' ? 'selected' : '' }}"
             data-value="bi bi-plus-square" data-search="plus-square">
            <i class="bi bi-plus-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-square-dotted' ? 'selected' : '' }}"
             data-value="bi bi-plus-square-dotted" data-search="plus-square-dotted">
            <i class="bi bi-plus-square-dotted" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-square-dotted</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-plus-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-plus-square-fill" data-search="plus-square-fill">
            <i class="bi bi-plus-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">plus-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postage' ? 'selected' : '' }}"
             data-value="bi bi-postage" data-search="postage">
            <i class="bi bi-postage" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postage</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postage-fill' ? 'selected' : '' }}"
             data-value="bi bi-postage-fill" data-search="postage-fill">
            <i class="bi bi-postage-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postage-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postage-heart' ? 'selected' : '' }}"
             data-value="bi bi-postage-heart" data-search="postage-heart">
            <i class="bi bi-postage-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postage-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postage-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-postage-heart-fill" data-search="postage-heart-fill">
            <i class="bi bi-postage-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postage-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postcard' ? 'selected' : '' }}"
             data-value="bi bi-postcard" data-search="postcard">
            <i class="bi bi-postcard" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postcard</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postcard-fill' ? 'selected' : '' }}"
             data-value="bi bi-postcard-fill" data-search="postcard-fill">
            <i class="bi bi-postcard-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postcard-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postcard-heart' ? 'selected' : '' }}"
             data-value="bi bi-postcard-heart" data-search="postcard-heart">
            <i class="bi bi-postcard-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postcard-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-postcard-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-postcard-heart-fill" data-search="postcard-heart-fill">
            <i class="bi bi-postcard-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">postcard-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-power' ? 'selected' : '' }}"
             data-value="bi bi-power" data-search="power">
            <i class="bi bi-power" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">power</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-prescription' ? 'selected' : '' }}"
             data-value="bi bi-prescription" data-search="prescription">
            <i class="bi bi-prescription" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">prescription</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-prescription2' ? 'selected' : '' }}"
             data-value="bi bi-prescription2" data-search="prescription2">
            <i class="bi bi-prescription2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">prescription2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-printer' ? 'selected' : '' }}"
             data-value="bi bi-printer" data-search="printer">
            <i class="bi bi-printer" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">printer</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-printer-fill' ? 'selected' : '' }}"
             data-value="bi bi-printer-fill" data-search="printer-fill">
            <i class="bi bi-printer-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">printer-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-projector' ? 'selected' : '' }}"
             data-value="bi bi-projector" data-search="projector">
            <i class="bi bi-projector" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">projector</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-projector-fill' ? 'selected' : '' }}"
             data-value="bi bi-projector-fill" data-search="projector-fill">
            <i class="bi bi-projector-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">projector-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-puzzle' ? 'selected' : '' }}"
             data-value="bi bi-puzzle" data-search="puzzle">
            <i class="bi bi-puzzle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">puzzle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-puzzle-fill' ? 'selected' : '' }}"
             data-value="bi bi-puzzle-fill" data-search="puzzle-fill">
            <i class="bi bi-puzzle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">puzzle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-qr-code' ? 'selected' : '' }}"
             data-value="bi bi-qr-code" data-search="qr-code">
            <i class="bi bi-qr-code" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">qr-code</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-qr-code-scan' ? 'selected' : '' }}"
             data-value="bi bi-qr-code-scan" data-search="qr-code-scan">
            <i class="bi bi-qr-code-scan" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">qr-code-scan</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question' ? 'selected' : '' }}"
             data-value="bi bi-question" data-search="question">
            <i class="bi bi-question" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-circle' ? 'selected' : '' }}"
             data-value="bi bi-question-circle" data-search="question-circle">
            <i class="bi bi-question-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-question-circle-fill" data-search="question-circle-fill">
            <i class="bi bi-question-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-diamond' ? 'selected' : '' }}"
             data-value="bi bi-question-diamond" data-search="question-diamond">
            <i class="bi bi-question-diamond" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-diamond</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-diamond-fill' ? 'selected' : '' }}"
             data-value="bi bi-question-diamond-fill" data-search="question-diamond-fill">
            <i class="bi bi-question-diamond-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-diamond-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-lg' ? 'selected' : '' }}"
             data-value="bi bi-question-lg" data-search="question-lg">
            <i class="bi bi-question-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-octagon' ? 'selected' : '' }}"
             data-value="bi bi-question-octagon" data-search="question-octagon">
            <i class="bi bi-question-octagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-octagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-octagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-question-octagon-fill" data-search="question-octagon-fill">
            <i class="bi bi-question-octagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-octagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-square' ? 'selected' : '' }}"
             data-value="bi bi-question-square" data-search="question-square">
            <i class="bi bi-question-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-question-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-question-square-fill" data-search="question-square-fill">
            <i class="bi bi-question-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">question-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-quora' ? 'selected' : '' }}"
             data-value="bi bi-quora" data-search="quora">
            <i class="bi bi-quora" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">quora</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-quote' ? 'selected' : '' }}"
             data-value="bi bi-quote" data-search="quote">
            <i class="bi bi-quote" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">quote</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-r-circle' ? 'selected' : '' }}"
             data-value="bi bi-r-circle" data-search="r-circle">
            <i class="bi bi-r-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">r-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-r-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-r-circle-fill" data-search="r-circle-fill">
            <i class="bi bi-r-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">r-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-r-square' ? 'selected' : '' }}"
             data-value="bi bi-r-square" data-search="r-square">
            <i class="bi bi-r-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">r-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-r-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-r-square-fill" data-search="r-square-fill">
            <i class="bi bi-r-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">r-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-radar' ? 'selected' : '' }}"
             data-value="bi bi-radar" data-search="radar">
            <i class="bi bi-radar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">radar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-radioactive' ? 'selected' : '' }}"
             data-value="bi bi-radioactive" data-search="radioactive">
            <i class="bi bi-radioactive" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">radioactive</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rainbow' ? 'selected' : '' }}"
             data-value="bi bi-rainbow" data-search="rainbow">
            <i class="bi bi-rainbow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rainbow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-receipt' ? 'selected' : '' }}"
             data-value="bi bi-receipt" data-search="receipt">
            <i class="bi bi-receipt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">receipt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-receipt-cutoff' ? 'selected' : '' }}"
             data-value="bi bi-receipt-cutoff" data-search="receipt-cutoff">
            <i class="bi bi-receipt-cutoff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">receipt-cutoff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reception-0' ? 'selected' : '' }}"
             data-value="bi bi-reception-0" data-search="reception-0">
            <i class="bi bi-reception-0" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reception-0</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reception-1' ? 'selected' : '' }}"
             data-value="bi bi-reception-1" data-search="reception-1">
            <i class="bi bi-reception-1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reception-1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reception-2' ? 'selected' : '' }}"
             data-value="bi bi-reception-2" data-search="reception-2">
            <i class="bi bi-reception-2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reception-2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reception-3' ? 'selected' : '' }}"
             data-value="bi bi-reception-3" data-search="reception-3">
            <i class="bi bi-reception-3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reception-3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reception-4' ? 'selected' : '' }}"
             data-value="bi bi-reception-4" data-search="reception-4">
            <i class="bi bi-reception-4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reception-4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record' ? 'selected' : '' }}"
             data-value="bi bi-record" data-search="record">
            <i class="bi bi-record" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record-btn' ? 'selected' : '' }}"
             data-value="bi bi-record-btn" data-search="record-btn">
            <i class="bi bi-record-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-record-btn-fill" data-search="record-btn-fill">
            <i class="bi bi-record-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record-circle' ? 'selected' : '' }}"
             data-value="bi bi-record-circle" data-search="record-circle">
            <i class="bi bi-record-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-record-circle-fill" data-search="record-circle-fill">
            <i class="bi bi-record-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record-fill' ? 'selected' : '' }}"
             data-value="bi bi-record-fill" data-search="record-fill">
            <i class="bi bi-record-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record2' ? 'selected' : '' }}"
             data-value="bi bi-record2" data-search="record2">
            <i class="bi bi-record2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-record2-fill' ? 'selected' : '' }}"
             data-value="bi bi-record2-fill" data-search="record2-fill">
            <i class="bi bi-record2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">record2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-recycle' ? 'selected' : '' }}"
             data-value="bi bi-recycle" data-search="recycle">
            <i class="bi bi-recycle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">recycle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reddit' ? 'selected' : '' }}"
             data-value="bi bi-reddit" data-search="reddit">
            <i class="bi bi-reddit" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reddit</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-regex' ? 'selected' : '' }}"
             data-value="bi bi-regex" data-search="regex">
            <i class="bi bi-regex" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">regex</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-repeat' ? 'selected' : '' }}"
             data-value="bi bi-repeat" data-search="repeat">
            <i class="bi bi-repeat" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">repeat</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-repeat-1' ? 'selected' : '' }}"
             data-value="bi bi-repeat-1" data-search="repeat-1">
            <i class="bi bi-repeat-1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">repeat-1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reply' ? 'selected' : '' }}"
             data-value="bi bi-reply" data-search="reply">
            <i class="bi bi-reply" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reply</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reply-all' ? 'selected' : '' }}"
             data-value="bi bi-reply-all" data-search="reply-all">
            <i class="bi bi-reply-all" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reply-all</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reply-all-fill' ? 'selected' : '' }}"
             data-value="bi bi-reply-all-fill" data-search="reply-all-fill">
            <i class="bi bi-reply-all-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reply-all-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-reply-fill' ? 'selected' : '' }}"
             data-value="bi bi-reply-fill" data-search="reply-fill">
            <i class="bi bi-reply-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">reply-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind' ? 'selected' : '' }}"
             data-value="bi bi-rewind" data-search="rewind">
            <i class="bi bi-rewind" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind-btn' ? 'selected' : '' }}"
             data-value="bi bi-rewind-btn" data-search="rewind-btn">
            <i class="bi bi-rewind-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-rewind-btn-fill" data-search="rewind-btn-fill">
            <i class="bi bi-rewind-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind-circle' ? 'selected' : '' }}"
             data-value="bi bi-rewind-circle" data-search="rewind-circle">
            <i class="bi bi-rewind-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-rewind-circle-fill" data-search="rewind-circle-fill">
            <i class="bi bi-rewind-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rewind-fill' ? 'selected' : '' }}"
             data-value="bi bi-rewind-fill" data-search="rewind-fill">
            <i class="bi bi-rewind-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rewind-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-robot' ? 'selected' : '' }}"
             data-value="bi bi-robot" data-search="robot">
            <i class="bi bi-robot" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">robot</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rocket' ? 'selected' : '' }}"
             data-value="bi bi-rocket" data-search="rocket">
            <i class="bi bi-rocket" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rocket</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rocket-fill' ? 'selected' : '' }}"
             data-value="bi bi-rocket-fill" data-search="rocket-fill">
            <i class="bi bi-rocket-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rocket-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rocket-takeoff' ? 'selected' : '' }}"
             data-value="bi bi-rocket-takeoff" data-search="rocket-takeoff">
            <i class="bi bi-rocket-takeoff" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rocket-takeoff</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rocket-takeoff-fill' ? 'selected' : '' }}"
             data-value="bi bi-rocket-takeoff-fill" data-search="rocket-takeoff-fill">
            <i class="bi bi-rocket-takeoff-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rocket-takeoff-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-router' ? 'selected' : '' }}"
             data-value="bi bi-router" data-search="router">
            <i class="bi bi-router" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">router</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-router-fill' ? 'selected' : '' }}"
             data-value="bi bi-router-fill" data-search="router-fill">
            <i class="bi bi-router-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">router-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rss' ? 'selected' : '' }}"
             data-value="bi bi-rss" data-search="rss">
            <i class="bi bi-rss" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rss</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rss-fill' ? 'selected' : '' }}"
             data-value="bi bi-rss-fill" data-search="rss-fill">
            <i class="bi bi-rss-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rss-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-rulers' ? 'selected' : '' }}"
             data-value="bi bi-rulers" data-search="rulers">
            <i class="bi bi-rulers" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">rulers</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-safe' ? 'selected' : '' }}"
             data-value="bi bi-safe" data-search="safe">
            <i class="bi bi-safe" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">safe</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-safe-fill' ? 'selected' : '' }}"
             data-value="bi bi-safe-fill" data-search="safe-fill">
            <i class="bi bi-safe-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">safe-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-safe2' ? 'selected' : '' }}"
             data-value="bi bi-safe2" data-search="safe2">
            <i class="bi bi-safe2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">safe2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-safe2-fill' ? 'selected' : '' }}"
             data-value="bi bi-safe2-fill" data-search="safe2-fill">
            <i class="bi bi-safe2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">safe2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-save' ? 'selected' : '' }}"
             data-value="bi bi-save" data-search="save">
            <i class="bi bi-save" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">save</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-save-fill' ? 'selected' : '' }}"
             data-value="bi bi-save-fill" data-search="save-fill">
            <i class="bi bi-save-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">save-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-save2' ? 'selected' : '' }}"
             data-value="bi bi-save2" data-search="save2">
            <i class="bi bi-save2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">save2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-save2-fill' ? 'selected' : '' }}"
             data-value="bi bi-save2-fill" data-search="save2-fill">
            <i class="bi bi-save2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">save2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-scissors' ? 'selected' : '' }}"
             data-value="bi bi-scissors" data-search="scissors">
            <i class="bi bi-scissors" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">scissors</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-scooter' ? 'selected' : '' }}"
             data-value="bi bi-scooter" data-search="scooter">
            <i class="bi bi-scooter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">scooter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-screwdriver' ? 'selected' : '' }}"
             data-value="bi bi-screwdriver" data-search="screwdriver">
            <i class="bi bi-screwdriver" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">screwdriver</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sd-card' ? 'selected' : '' }}"
             data-value="bi bi-sd-card" data-search="sd-card">
            <i class="bi bi-sd-card" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sd-card</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sd-card-fill' ? 'selected' : '' }}"
             data-value="bi bi-sd-card-fill" data-search="sd-card-fill">
            <i class="bi bi-sd-card-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sd-card-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-search' ? 'selected' : '' }}"
             data-value="bi bi-search" data-search="search">
            <i class="bi bi-search" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">search</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-search-heart' ? 'selected' : '' }}"
             data-value="bi bi-search-heart" data-search="search-heart">
            <i class="bi bi-search-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">search-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-search-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-search-heart-fill" data-search="search-heart-fill">
            <i class="bi bi-search-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">search-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-segmented-nav' ? 'selected' : '' }}"
             data-value="bi bi-segmented-nav" data-search="segmented-nav">
            <i class="bi bi-segmented-nav" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">segmented-nav</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send' ? 'selected' : '' }}"
             data-value="bi bi-send" data-search="send">
            <i class="bi bi-send" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-arrow-down' ? 'selected' : '' }}"
             data-value="bi bi-send-arrow-down" data-search="send-arrow-down">
            <i class="bi bi-send-arrow-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-arrow-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-arrow-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-arrow-down-fill" data-search="send-arrow-down-fill">
            <i class="bi bi-send-arrow-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-arrow-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-arrow-up' ? 'selected' : '' }}"
             data-value="bi bi-send-arrow-up" data-search="send-arrow-up">
            <i class="bi bi-send-arrow-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-arrow-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-arrow-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-arrow-up-fill" data-search="send-arrow-up-fill">
            <i class="bi bi-send-arrow-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-arrow-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-check' ? 'selected' : '' }}"
             data-value="bi bi-send-check" data-search="send-check">
            <i class="bi bi-send-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-check-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-check-fill" data-search="send-check-fill">
            <i class="bi bi-send-check-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-check-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-dash' ? 'selected' : '' }}"
             data-value="bi bi-send-dash" data-search="send-dash">
            <i class="bi bi-send-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-dash-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-dash-fill" data-search="send-dash-fill">
            <i class="bi bi-send-dash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-dash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-send-exclamation" data-search="send-exclamation">
            <i class="bi bi-send-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-exclamation-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-exclamation-fill" data-search="send-exclamation-fill">
            <i class="bi bi-send-exclamation-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-exclamation-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-fill" data-search="send-fill">
            <i class="bi bi-send-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-plus' ? 'selected' : '' }}"
             data-value="bi bi-send-plus" data-search="send-plus">
            <i class="bi bi-send-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-plus-fill" data-search="send-plus-fill">
            <i class="bi bi-send-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-slash' ? 'selected' : '' }}"
             data-value="bi bi-send-slash" data-search="send-slash">
            <i class="bi bi-send-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-slash-fill" data-search="send-slash-fill">
            <i class="bi bi-send-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-x' ? 'selected' : '' }}"
             data-value="bi bi-send-x" data-search="send-x">
            <i class="bi bi-send-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-send-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-send-x-fill" data-search="send-x-fill">
            <i class="bi bi-send-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">send-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-server' ? 'selected' : '' }}"
             data-value="bi bi-server" data-search="server">
            <i class="bi bi-server" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">server</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shadows' ? 'selected' : '' }}"
             data-value="bi bi-shadows" data-search="shadows">
            <i class="bi bi-shadows" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shadows</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-share' ? 'selected' : '' }}"
             data-value="bi bi-share" data-search="share">
            <i class="bi bi-share" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">share</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-share-fill' ? 'selected' : '' }}"
             data-value="bi bi-share-fill" data-search="share-fill">
            <i class="bi bi-share-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">share-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield' ? 'selected' : '' }}"
             data-value="bi bi-shield" data-search="shield">
            <i class="bi bi-shield" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-check' ? 'selected' : '' }}"
             data-value="bi bi-shield-check" data-search="shield-check">
            <i class="bi bi-shield-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-shield-exclamation" data-search="shield-exclamation">
            <i class="bi bi-shield-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill" data-search="shield-fill">
            <i class="bi bi-shield-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill-check' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill-check" data-search="shield-fill-check">
            <i class="bi bi-shield-fill-check" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill-check</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill-exclamation' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill-exclamation" data-search="shield-fill-exclamation">
            <i class="bi bi-shield-fill-exclamation" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill-exclamation</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill-minus' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill-minus" data-search="shield-fill-minus">
            <i class="bi bi-shield-fill-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill-plus' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill-plus" data-search="shield-fill-plus">
            <i class="bi bi-shield-fill-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-fill-x' ? 'selected' : '' }}"
             data-value="bi bi-shield-fill-x" data-search="shield-fill-x">
            <i class="bi bi-shield-fill-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-fill-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-lock' ? 'selected' : '' }}"
             data-value="bi bi-shield-lock" data-search="shield-lock">
            <i class="bi bi-shield-lock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-lock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-lock-fill' ? 'selected' : '' }}"
             data-value="bi bi-shield-lock-fill" data-search="shield-lock-fill">
            <i class="bi bi-shield-lock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-lock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-minus' ? 'selected' : '' }}"
             data-value="bi bi-shield-minus" data-search="shield-minus">
            <i class="bi bi-shield-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-plus' ? 'selected' : '' }}"
             data-value="bi bi-shield-plus" data-search="shield-plus">
            <i class="bi bi-shield-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-shaded' ? 'selected' : '' }}"
             data-value="bi bi-shield-shaded" data-search="shield-shaded">
            <i class="bi bi-shield-shaded" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-shaded</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-slash' ? 'selected' : '' }}"
             data-value="bi bi-shield-slash" data-search="shield-slash">
            <i class="bi bi-shield-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-shield-slash-fill" data-search="shield-slash-fill">
            <i class="bi bi-shield-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shield-x' ? 'selected' : '' }}"
             data-value="bi bi-shield-x" data-search="shield-x">
            <i class="bi bi-shield-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shield-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shift' ? 'selected' : '' }}"
             data-value="bi bi-shift" data-search="shift">
            <i class="bi bi-shift" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shift</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shift-fill' ? 'selected' : '' }}"
             data-value="bi bi-shift-fill" data-search="shift-fill">
            <i class="bi bi-shift-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shift-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shop' ? 'selected' : '' }}"
             data-value="bi bi-shop" data-search="shop">
            <i class="bi bi-shop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shop-window' ? 'selected' : '' }}"
             data-value="bi bi-shop-window" data-search="shop-window">
            <i class="bi bi-shop-window" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shop-window</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-shuffle' ? 'selected' : '' }}"
             data-value="bi bi-shuffle" data-search="shuffle">
            <i class="bi bi-shuffle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">shuffle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-dead-end' ? 'selected' : '' }}"
             data-value="bi bi-sign-dead-end" data-search="sign-dead-end">
            <i class="bi bi-sign-dead-end" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-dead-end</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-dead-end-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-dead-end-fill" data-search="sign-dead-end-fill">
            <i class="bi bi-sign-dead-end-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-dead-end-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-do-not-enter' ? 'selected' : '' }}"
             data-value="bi bi-sign-do-not-enter" data-search="sign-do-not-enter">
            <i class="bi bi-sign-do-not-enter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-do-not-enter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-do-not-enter-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-do-not-enter-fill" data-search="sign-do-not-enter-fill">
            <i class="bi bi-sign-do-not-enter-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-do-not-enter-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection" data-search="sign-intersection">
            <i class="bi bi-sign-intersection" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-fill" data-search="sign-intersection-fill">
            <i class="bi bi-sign-intersection-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-side' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-side" data-search="sign-intersection-side">
            <i class="bi bi-sign-intersection-side" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-side</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-side-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-side-fill" data-search="sign-intersection-side-fill">
            <i class="bi bi-sign-intersection-side-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-side-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-t' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-t" data-search="sign-intersection-t">
            <i class="bi bi-sign-intersection-t" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-t</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-t-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-t-fill" data-search="sign-intersection-t-fill">
            <i class="bi bi-sign-intersection-t-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-t-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-y' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-y" data-search="sign-intersection-y">
            <i class="bi bi-sign-intersection-y" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-y</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-intersection-y-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-intersection-y-fill" data-search="sign-intersection-y-fill">
            <i class="bi bi-sign-intersection-y-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-intersection-y-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-merge-left' ? 'selected' : '' }}"
             data-value="bi bi-sign-merge-left" data-search="sign-merge-left">
            <i class="bi bi-sign-merge-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-merge-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-merge-left-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-merge-left-fill" data-search="sign-merge-left-fill">
            <i class="bi bi-sign-merge-left-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-merge-left-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-merge-right' ? 'selected' : '' }}"
             data-value="bi bi-sign-merge-right" data-search="sign-merge-right">
            <i class="bi bi-sign-merge-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-merge-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-merge-right-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-merge-right-fill" data-search="sign-merge-right-fill">
            <i class="bi bi-sign-merge-right-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-merge-right-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-left-turn' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-left-turn" data-search="sign-no-left-turn">
            <i class="bi bi-sign-no-left-turn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-left-turn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-left-turn-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-left-turn-fill" data-search="sign-no-left-turn-fill">
            <i class="bi bi-sign-no-left-turn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-left-turn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-parking' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-parking" data-search="sign-no-parking">
            <i class="bi bi-sign-no-parking" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-parking</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-parking-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-parking-fill" data-search="sign-no-parking-fill">
            <i class="bi bi-sign-no-parking-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-parking-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-right-turn' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-right-turn" data-search="sign-no-right-turn">
            <i class="bi bi-sign-no-right-turn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-right-turn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-no-right-turn-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-no-right-turn-fill" data-search="sign-no-right-turn-fill">
            <i class="bi bi-sign-no-right-turn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-no-right-turn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-railroad' ? 'selected' : '' }}"
             data-value="bi bi-sign-railroad" data-search="sign-railroad">
            <i class="bi bi-sign-railroad" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-railroad</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-railroad-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-railroad-fill" data-search="sign-railroad-fill">
            <i class="bi bi-sign-railroad-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-railroad-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-stop' ? 'selected' : '' }}"
             data-value="bi bi-sign-stop" data-search="sign-stop">
            <i class="bi bi-sign-stop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-stop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-stop-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-stop-fill" data-search="sign-stop-fill">
            <i class="bi bi-sign-stop-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-stop-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-stop-lights' ? 'selected' : '' }}"
             data-value="bi bi-sign-stop-lights" data-search="sign-stop-lights">
            <i class="bi bi-sign-stop-lights" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-stop-lights</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-stop-lights-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-stop-lights-fill" data-search="sign-stop-lights-fill">
            <i class="bi bi-sign-stop-lights-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-stop-lights-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-left' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-left" data-search="sign-turn-left">
            <i class="bi bi-sign-turn-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-left-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-left-fill" data-search="sign-turn-left-fill">
            <i class="bi bi-sign-turn-left-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-left-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-right' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-right" data-search="sign-turn-right">
            <i class="bi bi-sign-turn-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-right-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-right-fill" data-search="sign-turn-right-fill">
            <i class="bi bi-sign-turn-right-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-right-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-slight-left' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-slight-left" data-search="sign-turn-slight-left">
            <i class="bi bi-sign-turn-slight-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-slight-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-slight-left-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-slight-left-fill" data-search="sign-turn-slight-left-fill">
            <i class="bi bi-sign-turn-slight-left-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-slight-left-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-slight-right' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-slight-right" data-search="sign-turn-slight-right">
            <i class="bi bi-sign-turn-slight-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-slight-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-turn-slight-right-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-turn-slight-right-fill" data-search="sign-turn-slight-right-fill">
            <i class="bi bi-sign-turn-slight-right-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-turn-slight-right-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-yield' ? 'selected' : '' }}"
             data-value="bi bi-sign-yield" data-search="sign-yield">
            <i class="bi bi-sign-yield" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-yield</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sign-yield-fill' ? 'selected' : '' }}"
             data-value="bi bi-sign-yield-fill" data-search="sign-yield-fill">
            <i class="bi bi-sign-yield-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sign-yield-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signal' ? 'selected' : '' }}"
             data-value="bi bi-signal" data-search="signal">
            <i class="bi bi-signal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost' ? 'selected' : '' }}"
             data-value="bi bi-signpost" data-search="signpost">
            <i class="bi bi-signpost" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost-2' ? 'selected' : '' }}"
             data-value="bi bi-signpost-2" data-search="signpost-2">
            <i class="bi bi-signpost-2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost-2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost-2-fill' ? 'selected' : '' }}"
             data-value="bi bi-signpost-2-fill" data-search="signpost-2-fill">
            <i class="bi bi-signpost-2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost-2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost-fill' ? 'selected' : '' }}"
             data-value="bi bi-signpost-fill" data-search="signpost-fill">
            <i class="bi bi-signpost-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost-split' ? 'selected' : '' }}"
             data-value="bi bi-signpost-split" data-search="signpost-split">
            <i class="bi bi-signpost-split" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost-split</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-signpost-split-fill' ? 'selected' : '' }}"
             data-value="bi bi-signpost-split-fill" data-search="signpost-split-fill">
            <i class="bi bi-signpost-split-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">signpost-split-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sim' ? 'selected' : '' }}"
             data-value="bi bi-sim" data-search="sim">
            <i class="bi bi-sim" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sim</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sim-fill' ? 'selected' : '' }}"
             data-value="bi bi-sim-fill" data-search="sim-fill">
            <i class="bi bi-sim-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sim-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sim-slash' ? 'selected' : '' }}"
             data-value="bi bi-sim-slash" data-search="sim-slash">
            <i class="bi bi-sim-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sim-slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sim-slash-fill' ? 'selected' : '' }}"
             data-value="bi bi-sim-slash-fill" data-search="sim-slash-fill">
            <i class="bi bi-sim-slash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sim-slash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sina-weibo' ? 'selected' : '' }}"
             data-value="bi bi-sina-weibo" data-search="sina-weibo">
            <i class="bi bi-sina-weibo" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sina-weibo</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward" data-search="skip-backward">
            <i class="bi bi-skip-backward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward-btn' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward-btn" data-search="skip-backward-btn">
            <i class="bi bi-skip-backward-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward-btn-fill" data-search="skip-backward-btn-fill">
            <i class="bi bi-skip-backward-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward-circle' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward-circle" data-search="skip-backward-circle">
            <i class="bi bi-skip-backward-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward-circle-fill" data-search="skip-backward-circle-fill">
            <i class="bi bi-skip-backward-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-backward-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-backward-fill" data-search="skip-backward-fill">
            <i class="bi bi-skip-backward-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-backward-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end' ? 'selected' : '' }}"
             data-value="bi bi-skip-end" data-search="skip-end">
            <i class="bi bi-skip-end" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end-btn' ? 'selected' : '' }}"
             data-value="bi bi-skip-end-btn" data-search="skip-end-btn">
            <i class="bi bi-skip-end-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-end-btn-fill" data-search="skip-end-btn-fill">
            <i class="bi bi-skip-end-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end-circle' ? 'selected' : '' }}"
             data-value="bi bi-skip-end-circle" data-search="skip-end-circle">
            <i class="bi bi-skip-end-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-end-circle-fill" data-search="skip-end-circle-fill">
            <i class="bi bi-skip-end-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-end-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-end-fill" data-search="skip-end-fill">
            <i class="bi bi-skip-end-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-end-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward" data-search="skip-forward">
            <i class="bi bi-skip-forward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward-btn' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward-btn" data-search="skip-forward-btn">
            <i class="bi bi-skip-forward-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward-btn-fill" data-search="skip-forward-btn-fill">
            <i class="bi bi-skip-forward-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward-circle' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward-circle" data-search="skip-forward-circle">
            <i class="bi bi-skip-forward-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward-circle-fill" data-search="skip-forward-circle-fill">
            <i class="bi bi-skip-forward-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-forward-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-forward-fill" data-search="skip-forward-fill">
            <i class="bi bi-skip-forward-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-forward-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start' ? 'selected' : '' }}"
             data-value="bi bi-skip-start" data-search="skip-start">
            <i class="bi bi-skip-start" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start-btn' ? 'selected' : '' }}"
             data-value="bi bi-skip-start-btn" data-search="skip-start-btn">
            <i class="bi bi-skip-start-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-start-btn-fill" data-search="skip-start-btn-fill">
            <i class="bi bi-skip-start-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start-circle' ? 'selected' : '' }}"
             data-value="bi bi-skip-start-circle" data-search="skip-start-circle">
            <i class="bi bi-skip-start-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-start-circle-fill" data-search="skip-start-circle-fill">
            <i class="bi bi-skip-start-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skip-start-fill' ? 'selected' : '' }}"
             data-value="bi bi-skip-start-fill" data-search="skip-start-fill">
            <i class="bi bi-skip-start-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skip-start-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-skype' ? 'selected' : '' }}"
             data-value="bi bi-skype" data-search="skype">
            <i class="bi bi-skype" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">skype</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slack' ? 'selected' : '' }}"
             data-value="bi bi-slack" data-search="slack">
            <i class="bi bi-slack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash' ? 'selected' : '' }}"
             data-value="bi bi-slash" data-search="slash">
            <i class="bi bi-slash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash-circle' ? 'selected' : '' }}"
             data-value="bi bi-slash-circle" data-search="slash-circle">
            <i class="bi bi-slash-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-slash-circle-fill" data-search="slash-circle-fill">
            <i class="bi bi-slash-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash-lg' ? 'selected' : '' }}"
             data-value="bi bi-slash-lg" data-search="slash-lg">
            <i class="bi bi-slash-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash-square' ? 'selected' : '' }}"
             data-value="bi bi-slash-square" data-search="slash-square">
            <i class="bi bi-slash-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-slash-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-slash-square-fill" data-search="slash-square-fill">
            <i class="bi bi-slash-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">slash-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sliders' ? 'selected' : '' }}"
             data-value="bi bi-sliders" data-search="sliders">
            <i class="bi bi-sliders" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sliders</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sliders2' ? 'selected' : '' }}"
             data-value="bi bi-sliders2" data-search="sliders2">
            <i class="bi bi-sliders2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sliders2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sliders2-vertical' ? 'selected' : '' }}"
             data-value="bi bi-sliders2-vertical" data-search="sliders2-vertical">
            <i class="bi bi-sliders2-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sliders2-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-smartwatch' ? 'selected' : '' }}"
             data-value="bi bi-smartwatch" data-search="smartwatch">
            <i class="bi bi-smartwatch" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">smartwatch</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-snapchat' ? 'selected' : '' }}"
             data-value="bi bi-snapchat" data-search="snapchat">
            <i class="bi bi-snapchat" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">snapchat</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-snow' ? 'selected' : '' }}"
             data-value="bi bi-snow" data-search="snow">
            <i class="bi bi-snow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">snow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-snow2' ? 'selected' : '' }}"
             data-value="bi bi-snow2" data-search="snow2">
            <i class="bi bi-snow2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">snow2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-snow3' ? 'selected' : '' }}"
             data-value="bi bi-snow3" data-search="snow3">
            <i class="bi bi-snow3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">snow3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-alpha-down' ? 'selected' : '' }}"
             data-value="bi bi-sort-alpha-down" data-search="sort-alpha-down">
            <i class="bi bi-sort-alpha-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-alpha-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-alpha-down-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-alpha-down-alt" data-search="sort-alpha-down-alt">
            <i class="bi bi-sort-alpha-down-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-alpha-down-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-alpha-up' ? 'selected' : '' }}"
             data-value="bi bi-sort-alpha-up" data-search="sort-alpha-up">
            <i class="bi bi-sort-alpha-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-alpha-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-alpha-up-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-alpha-up-alt" data-search="sort-alpha-up-alt">
            <i class="bi bi-sort-alpha-up-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-alpha-up-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-down' ? 'selected' : '' }}"
             data-value="bi bi-sort-down" data-search="sort-down">
            <i class="bi bi-sort-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-down-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-down-alt" data-search="sort-down-alt">
            <i class="bi bi-sort-down-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-down-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-numeric-down' ? 'selected' : '' }}"
             data-value="bi bi-sort-numeric-down" data-search="sort-numeric-down">
            <i class="bi bi-sort-numeric-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-numeric-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-numeric-down-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-numeric-down-alt" data-search="sort-numeric-down-alt">
            <i class="bi bi-sort-numeric-down-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-numeric-down-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-numeric-up' ? 'selected' : '' }}"
             data-value="bi bi-sort-numeric-up" data-search="sort-numeric-up">
            <i class="bi bi-sort-numeric-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-numeric-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-numeric-up-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-numeric-up-alt" data-search="sort-numeric-up-alt">
            <i class="bi bi-sort-numeric-up-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-numeric-up-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-up' ? 'selected' : '' }}"
             data-value="bi bi-sort-up" data-search="sort-up">
            <i class="bi bi-sort-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sort-up-alt' ? 'selected' : '' }}"
             data-value="bi bi-sort-up-alt" data-search="sort-up-alt">
            <i class="bi bi-sort-up-alt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sort-up-alt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-soundwave' ? 'selected' : '' }}"
             data-value="bi bi-soundwave" data-search="soundwave">
            <i class="bi bi-soundwave" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">soundwave</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sourceforge' ? 'selected' : '' }}"
             data-value="bi bi-sourceforge" data-search="sourceforge">
            <i class="bi bi-sourceforge" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sourceforge</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-speaker' ? 'selected' : '' }}"
             data-value="bi bi-speaker" data-search="speaker">
            <i class="bi bi-speaker" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">speaker</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-speaker-fill' ? 'selected' : '' }}"
             data-value="bi bi-speaker-fill" data-search="speaker-fill">
            <i class="bi bi-speaker-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">speaker-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-speedometer' ? 'selected' : '' }}"
             data-value="bi bi-speedometer" data-search="speedometer">
            <i class="bi bi-speedometer" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">speedometer</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-speedometer2' ? 'selected' : '' }}"
             data-value="bi bi-speedometer2" data-search="speedometer2">
            <i class="bi bi-speedometer2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">speedometer2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-spellcheck' ? 'selected' : '' }}"
             data-value="bi bi-spellcheck" data-search="spellcheck">
            <i class="bi bi-spellcheck" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">spellcheck</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-spotify' ? 'selected' : '' }}"
             data-value="bi bi-spotify" data-search="spotify">
            <i class="bi bi-spotify" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">spotify</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-square' ? 'selected' : '' }}"
             data-value="bi bi-square" data-search="square">
            <i class="bi bi-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-square-fill" data-search="square-fill">
            <i class="bi bi-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-square-half' ? 'selected' : '' }}"
             data-value="bi bi-square-half" data-search="square-half">
            <i class="bi bi-square-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">square-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stack' ? 'selected' : '' }}"
             data-value="bi bi-stack" data-search="stack">
            <i class="bi bi-stack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stack-overflow' ? 'selected' : '' }}"
             data-value="bi bi-stack-overflow" data-search="stack-overflow">
            <i class="bi bi-stack-overflow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stack-overflow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-star' ? 'selected' : '' }}"
             data-value="bi bi-star" data-search="star">
            <i class="bi bi-star" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">star</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-star-fill' ? 'selected' : '' }}"
             data-value="bi bi-star-fill" data-search="star-fill">
            <i class="bi bi-star-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">star-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-star-half' ? 'selected' : '' }}"
             data-value="bi bi-star-half" data-search="star-half">
            <i class="bi bi-star-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">star-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stars' ? 'selected' : '' }}"
             data-value="bi bi-stars" data-search="stars">
            <i class="bi bi-stars" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stars</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-steam' ? 'selected' : '' }}"
             data-value="bi bi-steam" data-search="steam">
            <i class="bi bi-steam" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">steam</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stickies' ? 'selected' : '' }}"
             data-value="bi bi-stickies" data-search="stickies">
            <i class="bi bi-stickies" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stickies</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stickies-fill' ? 'selected' : '' }}"
             data-value="bi bi-stickies-fill" data-search="stickies-fill">
            <i class="bi bi-stickies-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stickies-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sticky' ? 'selected' : '' }}"
             data-value="bi bi-sticky" data-search="sticky">
            <i class="bi bi-sticky" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sticky</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sticky-fill' ? 'selected' : '' }}"
             data-value="bi bi-sticky-fill" data-search="sticky-fill">
            <i class="bi bi-sticky-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sticky-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop' ? 'selected' : '' }}"
             data-value="bi bi-stop" data-search="stop">
            <i class="bi bi-stop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop-btn' ? 'selected' : '' }}"
             data-value="bi bi-stop-btn" data-search="stop-btn">
            <i class="bi bi-stop-btn" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop-btn</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop-btn-fill' ? 'selected' : '' }}"
             data-value="bi bi-stop-btn-fill" data-search="stop-btn-fill">
            <i class="bi bi-stop-btn-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop-btn-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop-circle' ? 'selected' : '' }}"
             data-value="bi bi-stop-circle" data-search="stop-circle">
            <i class="bi bi-stop-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-stop-circle-fill" data-search="stop-circle-fill">
            <i class="bi bi-stop-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stop-fill' ? 'selected' : '' }}"
             data-value="bi bi-stop-fill" data-search="stop-fill">
            <i class="bi bi-stop-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stop-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stoplights' ? 'selected' : '' }}"
             data-value="bi bi-stoplights" data-search="stoplights">
            <i class="bi bi-stoplights" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stoplights</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stoplights-fill' ? 'selected' : '' }}"
             data-value="bi bi-stoplights-fill" data-search="stoplights-fill">
            <i class="bi bi-stoplights-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stoplights-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stopwatch' ? 'selected' : '' }}"
             data-value="bi bi-stopwatch" data-search="stopwatch">
            <i class="bi bi-stopwatch" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stopwatch</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stopwatch-fill' ? 'selected' : '' }}"
             data-value="bi bi-stopwatch-fill" data-search="stopwatch-fill">
            <i class="bi bi-stopwatch-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stopwatch-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-strava' ? 'selected' : '' }}"
             data-value="bi bi-strava" data-search="strava">
            <i class="bi bi-strava" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">strava</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-stripe' ? 'selected' : '' }}"
             data-value="bi bi-stripe" data-search="stripe">
            <i class="bi bi-stripe" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">stripe</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-subscript' ? 'selected' : '' }}"
             data-value="bi bi-subscript" data-search="subscript">
            <i class="bi bi-subscript" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">subscript</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-substack' ? 'selected' : '' }}"
             data-value="bi bi-substack" data-search="substack">
            <i class="bi bi-substack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">substack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-subtract' ? 'selected' : '' }}"
             data-value="bi bi-subtract" data-search="subtract">
            <i class="bi bi-subtract" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">subtract</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-club' ? 'selected' : '' }}"
             data-value="bi bi-suit-club" data-search="suit-club">
            <i class="bi bi-suit-club" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-club</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-club-fill' ? 'selected' : '' }}"
             data-value="bi bi-suit-club-fill" data-search="suit-club-fill">
            <i class="bi bi-suit-club-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-club-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-diamond' ? 'selected' : '' }}"
             data-value="bi bi-suit-diamond" data-search="suit-diamond">
            <i class="bi bi-suit-diamond" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-diamond</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-diamond-fill' ? 'selected' : '' }}"
             data-value="bi bi-suit-diamond-fill" data-search="suit-diamond-fill">
            <i class="bi bi-suit-diamond-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-diamond-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-heart' ? 'selected' : '' }}"
             data-value="bi bi-suit-heart" data-search="suit-heart">
            <i class="bi bi-suit-heart" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-heart</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-heart-fill' ? 'selected' : '' }}"
             data-value="bi bi-suit-heart-fill" data-search="suit-heart-fill">
            <i class="bi bi-suit-heart-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-heart-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-spade' ? 'selected' : '' }}"
             data-value="bi bi-suit-spade" data-search="suit-spade">
            <i class="bi bi-suit-spade" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-spade</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suit-spade-fill' ? 'selected' : '' }}"
             data-value="bi bi-suit-spade-fill" data-search="suit-spade-fill">
            <i class="bi bi-suit-spade-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suit-spade-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase' ? 'selected' : '' }}"
             data-value="bi bi-suitcase" data-search="suitcase">
            <i class="bi bi-suitcase" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase-fill' ? 'selected' : '' }}"
             data-value="bi bi-suitcase-fill" data-search="suitcase-fill">
            <i class="bi bi-suitcase-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase-lg' ? 'selected' : '' }}"
             data-value="bi bi-suitcase-lg" data-search="suitcase-lg">
            <i class="bi bi-suitcase-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase-lg-fill' ? 'selected' : '' }}"
             data-value="bi bi-suitcase-lg-fill" data-search="suitcase-lg-fill">
            <i class="bi bi-suitcase-lg-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase-lg-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase2' ? 'selected' : '' }}"
             data-value="bi bi-suitcase2" data-search="suitcase2">
            <i class="bi bi-suitcase2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-suitcase2-fill' ? 'selected' : '' }}"
             data-value="bi bi-suitcase2-fill" data-search="suitcase2-fill">
            <i class="bi bi-suitcase2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">suitcase2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sun' ? 'selected' : '' }}"
             data-value="bi bi-sun" data-search="sun">
            <i class="bi bi-sun" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sun</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sun-fill' ? 'selected' : '' }}"
             data-value="bi bi-sun-fill" data-search="sun-fill">
            <i class="bi bi-sun-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sun-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sunglasses' ? 'selected' : '' }}"
             data-value="bi bi-sunglasses" data-search="sunglasses">
            <i class="bi bi-sunglasses" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sunglasses</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sunrise' ? 'selected' : '' }}"
             data-value="bi bi-sunrise" data-search="sunrise">
            <i class="bi bi-sunrise" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sunrise</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sunrise-fill' ? 'selected' : '' }}"
             data-value="bi bi-sunrise-fill" data-search="sunrise-fill">
            <i class="bi bi-sunrise-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sunrise-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sunset' ? 'selected' : '' }}"
             data-value="bi bi-sunset" data-search="sunset">
            <i class="bi bi-sunset" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sunset</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-sunset-fill' ? 'selected' : '' }}"
             data-value="bi bi-sunset-fill" data-search="sunset-fill">
            <i class="bi bi-sunset-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">sunset-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-superscript' ? 'selected' : '' }}"
             data-value="bi bi-superscript" data-search="superscript">
            <i class="bi bi-superscript" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">superscript</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-symmetry-horizontal' ? 'selected' : '' }}"
             data-value="bi bi-symmetry-horizontal" data-search="symmetry-horizontal">
            <i class="bi bi-symmetry-horizontal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">symmetry-horizontal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-symmetry-vertical' ? 'selected' : '' }}"
             data-value="bi bi-symmetry-vertical" data-search="symmetry-vertical">
            <i class="bi bi-symmetry-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">symmetry-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-table' ? 'selected' : '' }}"
             data-value="bi bi-table" data-search="table">
            <i class="bi bi-table" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">table</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tablet' ? 'selected' : '' }}"
             data-value="bi bi-tablet" data-search="tablet">
            <i class="bi bi-tablet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tablet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tablet-fill' ? 'selected' : '' }}"
             data-value="bi bi-tablet-fill" data-search="tablet-fill">
            <i class="bi bi-tablet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tablet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tablet-landscape' ? 'selected' : '' }}"
             data-value="bi bi-tablet-landscape" data-search="tablet-landscape">
            <i class="bi bi-tablet-landscape" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tablet-landscape</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tablet-landscape-fill' ? 'selected' : '' }}"
             data-value="bi bi-tablet-landscape-fill" data-search="tablet-landscape-fill">
            <i class="bi bi-tablet-landscape-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tablet-landscape-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tag' ? 'selected' : '' }}"
             data-value="bi bi-tag" data-search="tag">
            <i class="bi bi-tag" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tag</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tag-fill' ? 'selected' : '' }}"
             data-value="bi bi-tag-fill" data-search="tag-fill">
            <i class="bi bi-tag-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tag-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tags' ? 'selected' : '' }}"
             data-value="bi bi-tags" data-search="tags">
            <i class="bi bi-tags" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tags</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tags-fill' ? 'selected' : '' }}"
             data-value="bi bi-tags-fill" data-search="tags-fill">
            <i class="bi bi-tags-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tags-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-taxi-front' ? 'selected' : '' }}"
             data-value="bi bi-taxi-front" data-search="taxi-front">
            <i class="bi bi-taxi-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">taxi-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-taxi-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-taxi-front-fill" data-search="taxi-front-fill">
            <i class="bi bi-taxi-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">taxi-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telegram' ? 'selected' : '' }}"
             data-value="bi bi-telegram" data-search="telegram">
            <i class="bi bi-telegram" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telegram</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone' ? 'selected' : '' }}"
             data-value="bi bi-telephone" data-search="telephone">
            <i class="bi bi-telephone" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-fill" data-search="telephone-fill">
            <i class="bi bi-telephone-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-forward' ? 'selected' : '' }}"
             data-value="bi bi-telephone-forward" data-search="telephone-forward">
            <i class="bi bi-telephone-forward" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-forward</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-forward-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-forward-fill" data-search="telephone-forward-fill">
            <i class="bi bi-telephone-forward-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-forward-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-inbound' ? 'selected' : '' }}"
             data-value="bi bi-telephone-inbound" data-search="telephone-inbound">
            <i class="bi bi-telephone-inbound" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-inbound</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-inbound-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-inbound-fill" data-search="telephone-inbound-fill">
            <i class="bi bi-telephone-inbound-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-inbound-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-minus' ? 'selected' : '' }}"
             data-value="bi bi-telephone-minus" data-search="telephone-minus">
            <i class="bi bi-telephone-minus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-minus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-minus-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-minus-fill" data-search="telephone-minus-fill">
            <i class="bi bi-telephone-minus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-minus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-outbound' ? 'selected' : '' }}"
             data-value="bi bi-telephone-outbound" data-search="telephone-outbound">
            <i class="bi bi-telephone-outbound" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-outbound</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-outbound-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-outbound-fill" data-search="telephone-outbound-fill">
            <i class="bi bi-telephone-outbound-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-outbound-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-plus' ? 'selected' : '' }}"
             data-value="bi bi-telephone-plus" data-search="telephone-plus">
            <i class="bi bi-telephone-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-plus-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-plus-fill" data-search="telephone-plus-fill">
            <i class="bi bi-telephone-plus-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-plus-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-x' ? 'selected' : '' }}"
             data-value="bi bi-telephone-x" data-search="telephone-x">
            <i class="bi bi-telephone-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-telephone-x-fill' ? 'selected' : '' }}"
             data-value="bi bi-telephone-x-fill" data-search="telephone-x-fill">
            <i class="bi bi-telephone-x-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">telephone-x-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tencent-qq' ? 'selected' : '' }}"
             data-value="bi bi-tencent-qq" data-search="tencent-qq">
            <i class="bi bi-tencent-qq" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tencent-qq</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal' ? 'selected' : '' }}"
             data-value="bi bi-terminal" data-search="terminal">
            <i class="bi bi-terminal" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal-dash' ? 'selected' : '' }}"
             data-value="bi bi-terminal-dash" data-search="terminal-dash">
            <i class="bi bi-terminal-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal-fill' ? 'selected' : '' }}"
             data-value="bi bi-terminal-fill" data-search="terminal-fill">
            <i class="bi bi-terminal-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal-plus' ? 'selected' : '' }}"
             data-value="bi bi-terminal-plus" data-search="terminal-plus">
            <i class="bi bi-terminal-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal-split' ? 'selected' : '' }}"
             data-value="bi bi-terminal-split" data-search="terminal-split">
            <i class="bi bi-terminal-split" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal-split</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-terminal-x' ? 'selected' : '' }}"
             data-value="bi bi-terminal-x" data-search="terminal-x">
            <i class="bi bi-terminal-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">terminal-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-center' ? 'selected' : '' }}"
             data-value="bi bi-text-center" data-search="text-center">
            <i class="bi bi-text-center" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-center</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-indent-left' ? 'selected' : '' }}"
             data-value="bi bi-text-indent-left" data-search="text-indent-left">
            <i class="bi bi-text-indent-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-indent-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-indent-right' ? 'selected' : '' }}"
             data-value="bi bi-text-indent-right" data-search="text-indent-right">
            <i class="bi bi-text-indent-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-indent-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-left' ? 'selected' : '' }}"
             data-value="bi bi-text-left" data-search="text-left">
            <i class="bi bi-text-left" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-left</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-paragraph' ? 'selected' : '' }}"
             data-value="bi bi-text-paragraph" data-search="text-paragraph">
            <i class="bi bi-text-paragraph" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-paragraph</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-right' ? 'selected' : '' }}"
             data-value="bi bi-text-right" data-search="text-right">
            <i class="bi bi-text-right" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-right</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-text-wrap' ? 'selected' : '' }}"
             data-value="bi bi-text-wrap" data-search="text-wrap">
            <i class="bi bi-text-wrap" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">text-wrap</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-textarea' ? 'selected' : '' }}"
             data-value="bi bi-textarea" data-search="textarea">
            <i class="bi bi-textarea" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">textarea</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-textarea-resize' ? 'selected' : '' }}"
             data-value="bi bi-textarea-resize" data-search="textarea-resize">
            <i class="bi bi-textarea-resize" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">textarea-resize</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-textarea-t' ? 'selected' : '' }}"
             data-value="bi bi-textarea-t" data-search="textarea-t">
            <i class="bi bi-textarea-t" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">textarea-t</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer' ? 'selected' : '' }}"
             data-value="bi bi-thermometer" data-search="thermometer">
            <i class="bi bi-thermometer" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer-half' ? 'selected' : '' }}"
             data-value="bi bi-thermometer-half" data-search="thermometer-half">
            <i class="bi bi-thermometer-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer-high' ? 'selected' : '' }}"
             data-value="bi bi-thermometer-high" data-search="thermometer-high">
            <i class="bi bi-thermometer-high" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer-high</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer-low' ? 'selected' : '' }}"
             data-value="bi bi-thermometer-low" data-search="thermometer-low">
            <i class="bi bi-thermometer-low" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer-low</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer-snow' ? 'selected' : '' }}"
             data-value="bi bi-thermometer-snow" data-search="thermometer-snow">
            <i class="bi bi-thermometer-snow" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer-snow</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thermometer-sun' ? 'selected' : '' }}"
             data-value="bi bi-thermometer-sun" data-search="thermometer-sun">
            <i class="bi bi-thermometer-sun" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thermometer-sun</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-threads' ? 'selected' : '' }}"
             data-value="bi bi-threads" data-search="threads">
            <i class="bi bi-threads" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">threads</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-threads-fill' ? 'selected' : '' }}"
             data-value="bi bi-threads-fill" data-search="threads-fill">
            <i class="bi bi-threads-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">threads-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-three-dots' ? 'selected' : '' }}"
             data-value="bi bi-three-dots" data-search="three-dots">
            <i class="bi bi-three-dots" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">three-dots</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-three-dots-vertical' ? 'selected' : '' }}"
             data-value="bi bi-three-dots-vertical" data-search="three-dots-vertical">
            <i class="bi bi-three-dots-vertical" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">three-dots-vertical</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thunderbolt' ? 'selected' : '' }}"
             data-value="bi bi-thunderbolt" data-search="thunderbolt">
            <i class="bi bi-thunderbolt" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thunderbolt</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-thunderbolt-fill' ? 'selected' : '' }}"
             data-value="bi bi-thunderbolt-fill" data-search="thunderbolt-fill">
            <i class="bi bi-thunderbolt-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">thunderbolt-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket' ? 'selected' : '' }}"
             data-value="bi bi-ticket" data-search="ticket">
            <i class="bi bi-ticket" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket-detailed' ? 'selected' : '' }}"
             data-value="bi bi-ticket-detailed" data-search="ticket-detailed">
            <i class="bi bi-ticket-detailed" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket-detailed</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket-detailed-fill' ? 'selected' : '' }}"
             data-value="bi bi-ticket-detailed-fill" data-search="ticket-detailed-fill">
            <i class="bi bi-ticket-detailed-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket-detailed-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket-fill' ? 'selected' : '' }}"
             data-value="bi bi-ticket-fill" data-search="ticket-fill">
            <i class="bi bi-ticket-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket-perforated' ? 'selected' : '' }}"
             data-value="bi bi-ticket-perforated" data-search="ticket-perforated">
            <i class="bi bi-ticket-perforated" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket-perforated</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ticket-perforated-fill' ? 'selected' : '' }}"
             data-value="bi bi-ticket-perforated-fill" data-search="ticket-perforated-fill">
            <i class="bi bi-ticket-perforated-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ticket-perforated-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tiktok' ? 'selected' : '' }}"
             data-value="bi bi-tiktok" data-search="tiktok">
            <i class="bi bi-tiktok" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tiktok</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggle-off' ? 'selected' : '' }}"
             data-value="bi bi-toggle-off" data-search="toggle-off">
            <i class="bi bi-toggle-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggle-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggle-on' ? 'selected' : '' }}"
             data-value="bi bi-toggle-on" data-search="toggle-on">
            <i class="bi bi-toggle-on" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggle-on</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggle2-off' ? 'selected' : '' }}"
             data-value="bi bi-toggle2-off" data-search="toggle2-off">
            <i class="bi bi-toggle2-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggle2-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggle2-on' ? 'selected' : '' }}"
             data-value="bi bi-toggle2-on" data-search="toggle2-on">
            <i class="bi bi-toggle2-on" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggle2-on</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggles' ? 'selected' : '' }}"
             data-value="bi bi-toggles" data-search="toggles">
            <i class="bi bi-toggles" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggles</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-toggles2' ? 'selected' : '' }}"
             data-value="bi bi-toggles2" data-search="toggles2">
            <i class="bi bi-toggles2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">toggles2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tools' ? 'selected' : '' }}"
             data-value="bi bi-tools" data-search="tools">
            <i class="bi bi-tools" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tools</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tornado' ? 'selected' : '' }}"
             data-value="bi bi-tornado" data-search="tornado">
            <i class="bi bi-tornado" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tornado</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-freight-front' ? 'selected' : '' }}"
             data-value="bi bi-train-freight-front" data-search="train-freight-front">
            <i class="bi bi-train-freight-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-freight-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-freight-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-train-freight-front-fill" data-search="train-freight-front-fill">
            <i class="bi bi-train-freight-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-freight-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-front' ? 'selected' : '' }}"
             data-value="bi bi-train-front" data-search="train-front">
            <i class="bi bi-train-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-train-front-fill" data-search="train-front-fill">
            <i class="bi bi-train-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-lightrail-front' ? 'selected' : '' }}"
             data-value="bi bi-train-lightrail-front" data-search="train-lightrail-front">
            <i class="bi bi-train-lightrail-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-lightrail-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-train-lightrail-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-train-lightrail-front-fill" data-search="train-lightrail-front-fill">
            <i class="bi bi-train-lightrail-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">train-lightrail-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-translate' ? 'selected' : '' }}"
             data-value="bi bi-translate" data-search="translate">
            <i class="bi bi-translate" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">translate</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-transparency' ? 'selected' : '' }}"
             data-value="bi bi-transparency" data-search="transparency">
            <i class="bi bi-transparency" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">transparency</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash' ? 'selected' : '' }}"
             data-value="bi bi-trash" data-search="trash">
            <i class="bi bi-trash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash-fill' ? 'selected' : '' }}"
             data-value="bi bi-trash-fill" data-search="trash-fill">
            <i class="bi bi-trash-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash2' ? 'selected' : '' }}"
             data-value="bi bi-trash2" data-search="trash2">
            <i class="bi bi-trash2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash2-fill' ? 'selected' : '' }}"
             data-value="bi bi-trash2-fill" data-search="trash2-fill">
            <i class="bi bi-trash2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash3' ? 'selected' : '' }}"
             data-value="bi bi-trash3" data-search="trash3">
            <i class="bi bi-trash3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trash3-fill' ? 'selected' : '' }}"
             data-value="bi bi-trash3-fill" data-search="trash3-fill">
            <i class="bi bi-trash3-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trash3-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tree' ? 'selected' : '' }}"
             data-value="bi bi-tree" data-search="tree">
            <i class="bi bi-tree" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tree</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tree-fill' ? 'selected' : '' }}"
             data-value="bi bi-tree-fill" data-search="tree-fill">
            <i class="bi bi-tree-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tree-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trello' ? 'selected' : '' }}"
             data-value="bi bi-trello" data-search="trello">
            <i class="bi bi-trello" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trello</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-triangle' ? 'selected' : '' }}"
             data-value="bi bi-triangle" data-search="triangle">
            <i class="bi bi-triangle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">triangle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-triangle-fill' ? 'selected' : '' }}"
             data-value="bi bi-triangle-fill" data-search="triangle-fill">
            <i class="bi bi-triangle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">triangle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-triangle-half' ? 'selected' : '' }}"
             data-value="bi bi-triangle-half" data-search="triangle-half">
            <i class="bi bi-triangle-half" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">triangle-half</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trophy' ? 'selected' : '' }}"
             data-value="bi bi-trophy" data-search="trophy">
            <i class="bi bi-trophy" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trophy</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-trophy-fill' ? 'selected' : '' }}"
             data-value="bi bi-trophy-fill" data-search="trophy-fill">
            <i class="bi bi-trophy-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">trophy-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tropical-storm' ? 'selected' : '' }}"
             data-value="bi bi-tropical-storm" data-search="tropical-storm">
            <i class="bi bi-tropical-storm" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tropical-storm</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-truck' ? 'selected' : '' }}"
             data-value="bi bi-truck" data-search="truck">
            <i class="bi bi-truck" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">truck</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-truck-flatbed' ? 'selected' : '' }}"
             data-value="bi bi-truck-flatbed" data-search="truck-flatbed">
            <i class="bi bi-truck-flatbed" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">truck-flatbed</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-truck-front' ? 'selected' : '' }}"
             data-value="bi bi-truck-front" data-search="truck-front">
            <i class="bi bi-truck-front" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">truck-front</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-truck-front-fill' ? 'selected' : '' }}"
             data-value="bi bi-truck-front-fill" data-search="truck-front-fill">
            <i class="bi bi-truck-front-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">truck-front-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tsunami' ? 'selected' : '' }}"
             data-value="bi bi-tsunami" data-search="tsunami">
            <i class="bi bi-tsunami" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tsunami</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tux' ? 'selected' : '' }}"
             data-value="bi bi-tux" data-search="tux">
            <i class="bi bi-tux" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tux</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tv' ? 'selected' : '' }}"
             data-value="bi bi-tv" data-search="tv">
            <i class="bi bi-tv" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tv</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-tv-fill' ? 'selected' : '' }}"
             data-value="bi bi-tv-fill" data-search="tv-fill">
            <i class="bi bi-tv-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">tv-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-twitch' ? 'selected' : '' }}"
             data-value="bi bi-twitch" data-search="twitch">
            <i class="bi bi-twitch" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">twitch</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-twitter' ? 'selected' : '' }}"
             data-value="bi bi-twitter" data-search="twitter">
            <i class="bi bi-twitter" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">twitter</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-twitter-x' ? 'selected' : '' }}"
             data-value="bi bi-twitter-x" data-search="twitter-x">
            <i class="bi bi-twitter-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">twitter-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type' ? 'selected' : '' }}"
             data-value="bi bi-type" data-search="type">
            <i class="bi bi-type" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-bold' ? 'selected' : '' }}"
             data-value="bi bi-type-bold" data-search="type-bold">
            <i class="bi bi-type-bold" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-bold</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h1' ? 'selected' : '' }}"
             data-value="bi bi-type-h1" data-search="type-h1">
            <i class="bi bi-type-h1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h2' ? 'selected' : '' }}"
             data-value="bi bi-type-h2" data-search="type-h2">
            <i class="bi bi-type-h2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h3' ? 'selected' : '' }}"
             data-value="bi bi-type-h3" data-search="type-h3">
            <i class="bi bi-type-h3" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h3</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h4' ? 'selected' : '' }}"
             data-value="bi bi-type-h4" data-search="type-h4">
            <i class="bi bi-type-h4" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h4</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h5' ? 'selected' : '' }}"
             data-value="bi bi-type-h5" data-search="type-h5">
            <i class="bi bi-type-h5" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h5</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-h6' ? 'selected' : '' }}"
             data-value="bi bi-type-h6" data-search="type-h6">
            <i class="bi bi-type-h6" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-h6</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-italic' ? 'selected' : '' }}"
             data-value="bi bi-type-italic" data-search="type-italic">
            <i class="bi bi-type-italic" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-italic</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-strikethrough' ? 'selected' : '' }}"
             data-value="bi bi-type-strikethrough" data-search="type-strikethrough">
            <i class="bi bi-type-strikethrough" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-strikethrough</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-type-underline' ? 'selected' : '' }}"
             data-value="bi bi-type-underline" data-search="type-underline">
            <i class="bi bi-type-underline" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">type-underline</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-typescript' ? 'selected' : '' }}"
             data-value="bi bi-typescript" data-search="typescript">
            <i class="bi bi-typescript" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">typescript</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ubuntu' ? 'selected' : '' }}"
             data-value="bi bi-ubuntu" data-search="ubuntu">
            <i class="bi bi-ubuntu" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ubuntu</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ui-checks' ? 'selected' : '' }}"
             data-value="bi bi-ui-checks" data-search="ui-checks">
            <i class="bi bi-ui-checks" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ui-checks</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ui-checks-grid' ? 'selected' : '' }}"
             data-value="bi bi-ui-checks-grid" data-search="ui-checks-grid">
            <i class="bi bi-ui-checks-grid" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ui-checks-grid</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ui-radios' ? 'selected' : '' }}"
             data-value="bi bi-ui-radios" data-search="ui-radios">
            <i class="bi bi-ui-radios" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ui-radios</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-ui-radios-grid' ? 'selected' : '' }}"
             data-value="bi bi-ui-radios-grid" data-search="ui-radios-grid">
            <i class="bi bi-ui-radios-grid" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">ui-radios-grid</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-umbrella' ? 'selected' : '' }}"
             data-value="bi bi-umbrella" data-search="umbrella">
            <i class="bi bi-umbrella" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">umbrella</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-umbrella-fill' ? 'selected' : '' }}"
             data-value="bi bi-umbrella-fill" data-search="umbrella-fill">
            <i class="bi bi-umbrella-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">umbrella-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unindent' ? 'selected' : '' }}"
             data-value="bi bi-unindent" data-search="unindent">
            <i class="bi bi-unindent" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unindent</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-union' ? 'selected' : '' }}"
             data-value="bi bi-union" data-search="union">
            <i class="bi bi-union" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">union</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unity' ? 'selected' : '' }}"
             data-value="bi bi-unity" data-search="unity">
            <i class="bi bi-unity" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unity</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-universal-access' ? 'selected' : '' }}"
             data-value="bi bi-universal-access" data-search="universal-access">
            <i class="bi bi-universal-access" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">universal-access</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-universal-access-circle' ? 'selected' : '' }}"
             data-value="bi bi-universal-access-circle" data-search="universal-access-circle">
            <i class="bi bi-universal-access-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">universal-access-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unlock' ? 'selected' : '' }}"
             data-value="bi bi-unlock" data-search="unlock">
            <i class="bi bi-unlock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unlock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unlock-fill' ? 'selected' : '' }}"
             data-value="bi bi-unlock-fill" data-search="unlock-fill">
            <i class="bi bi-unlock-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unlock-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unlock2' ? 'selected' : '' }}"
             data-value="bi bi-unlock2" data-search="unlock2">
            <i class="bi bi-unlock2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unlock2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-unlock2-fill' ? 'selected' : '' }}"
             data-value="bi bi-unlock2-fill" data-search="unlock2-fill">
            <i class="bi bi-unlock2-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">unlock2-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-upc' ? 'selected' : '' }}"
             data-value="bi bi-upc" data-search="upc">
            <i class="bi bi-upc" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">upc</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-upc-scan' ? 'selected' : '' }}"
             data-value="bi bi-upc-scan" data-search="upc-scan">
            <i class="bi bi-upc-scan" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">upc-scan</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-upload' ? 'selected' : '' }}"
             data-value="bi bi-upload" data-search="upload">
            <i class="bi bi-upload" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">upload</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb' ? 'selected' : '' }}"
             data-value="bi bi-usb" data-search="usb">
            <i class="bi bi-usb" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-c' ? 'selected' : '' }}"
             data-value="bi bi-usb-c" data-search="usb-c">
            <i class="bi bi-usb-c" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-c</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-c-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-c-fill" data-search="usb-c-fill">
            <i class="bi bi-usb-c-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-c-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-drive' ? 'selected' : '' }}"
             data-value="bi bi-usb-drive" data-search="usb-drive">
            <i class="bi bi-usb-drive" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-drive</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-drive-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-drive-fill" data-search="usb-drive-fill">
            <i class="bi bi-usb-drive-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-drive-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-fill" data-search="usb-fill">
            <i class="bi bi-usb-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-micro' ? 'selected' : '' }}"
             data-value="bi bi-usb-micro" data-search="usb-micro">
            <i class="bi bi-usb-micro" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-micro</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-micro-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-micro-fill" data-search="usb-micro-fill">
            <i class="bi bi-usb-micro-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-micro-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-mini' ? 'selected' : '' }}"
             data-value="bi bi-usb-mini" data-search="usb-mini">
            <i class="bi bi-usb-mini" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-mini</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-mini-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-mini-fill" data-search="usb-mini-fill">
            <i class="bi bi-usb-mini-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-mini-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-plug' ? 'selected' : '' }}"
             data-value="bi bi-usb-plug" data-search="usb-plug">
            <i class="bi bi-usb-plug" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-plug</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-plug-fill' ? 'selected' : '' }}"
             data-value="bi bi-usb-plug-fill" data-search="usb-plug-fill">
            <i class="bi bi-usb-plug-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-plug-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-usb-symbol' ? 'selected' : '' }}"
             data-value="bi bi-usb-symbol" data-search="usb-symbol">
            <i class="bi bi-usb-symbol" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">usb-symbol</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-valentine' ? 'selected' : '' }}"
             data-value="bi bi-valentine" data-search="valentine">
            <i class="bi bi-valentine" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">valentine</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-valentine2' ? 'selected' : '' }}"
             data-value="bi bi-valentine2" data-search="valentine2">
            <i class="bi bi-valentine2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">valentine2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vector-pen' ? 'selected' : '' }}"
             data-value="bi bi-vector-pen" data-search="vector-pen">
            <i class="bi bi-vector-pen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vector-pen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-view-list' ? 'selected' : '' }}"
             data-value="bi bi-view-list" data-search="view-list">
            <i class="bi bi-view-list" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">view-list</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-view-stacked' ? 'selected' : '' }}"
             data-value="bi bi-view-stacked" data-search="view-stacked">
            <i class="bi bi-view-stacked" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">view-stacked</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vignette' ? 'selected' : '' }}"
             data-value="bi bi-vignette" data-search="vignette">
            <i class="bi bi-vignette" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vignette</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vimeo' ? 'selected' : '' }}"
             data-value="bi bi-vimeo" data-search="vimeo">
            <i class="bi bi-vimeo" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vimeo</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vinyl' ? 'selected' : '' }}"
             data-value="bi bi-vinyl" data-search="vinyl">
            <i class="bi bi-vinyl" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vinyl</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vinyl-fill' ? 'selected' : '' }}"
             data-value="bi bi-vinyl-fill" data-search="vinyl-fill">
            <i class="bi bi-vinyl-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vinyl-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-virus' ? 'selected' : '' }}"
             data-value="bi bi-virus" data-search="virus">
            <i class="bi bi-virus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">virus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-virus2' ? 'selected' : '' }}"
             data-value="bi bi-virus2" data-search="virus2">
            <i class="bi bi-virus2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">virus2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-voicemail' ? 'selected' : '' }}"
             data-value="bi bi-voicemail" data-search="voicemail">
            <i class="bi bi-voicemail" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">voicemail</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-down' ? 'selected' : '' }}"
             data-value="bi bi-volume-down" data-search="volume-down">
            <i class="bi bi-volume-down" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-down</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-down-fill' ? 'selected' : '' }}"
             data-value="bi bi-volume-down-fill" data-search="volume-down-fill">
            <i class="bi bi-volume-down-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-down-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-mute' ? 'selected' : '' }}"
             data-value="bi bi-volume-mute" data-search="volume-mute">
            <i class="bi bi-volume-mute" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-mute</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-mute-fill' ? 'selected' : '' }}"
             data-value="bi bi-volume-mute-fill" data-search="volume-mute-fill">
            <i class="bi bi-volume-mute-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-mute-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-off' ? 'selected' : '' }}"
             data-value="bi bi-volume-off" data-search="volume-off">
            <i class="bi bi-volume-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-off-fill' ? 'selected' : '' }}"
             data-value="bi bi-volume-off-fill" data-search="volume-off-fill">
            <i class="bi bi-volume-off-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-off-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-up' ? 'selected' : '' }}"
             data-value="bi bi-volume-up" data-search="volume-up">
            <i class="bi bi-volume-up" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-up</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-volume-up-fill' ? 'selected' : '' }}"
             data-value="bi bi-volume-up-fill" data-search="volume-up-fill">
            <i class="bi bi-volume-up-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">volume-up-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-vr' ? 'selected' : '' }}"
             data-value="bi bi-vr" data-search="vr">
            <i class="bi bi-vr" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">vr</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wallet' ? 'selected' : '' }}"
             data-value="bi bi-wallet" data-search="wallet">
            <i class="bi bi-wallet" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wallet</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wallet-fill' ? 'selected' : '' }}"
             data-value="bi bi-wallet-fill" data-search="wallet-fill">
            <i class="bi bi-wallet-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wallet-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wallet2' ? 'selected' : '' }}"
             data-value="bi bi-wallet2" data-search="wallet2">
            <i class="bi bi-wallet2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wallet2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-watch' ? 'selected' : '' }}"
             data-value="bi bi-watch" data-search="watch">
            <i class="bi bi-watch" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">watch</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-water' ? 'selected' : '' }}"
             data-value="bi bi-water" data-search="water">
            <i class="bi bi-water" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">water</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-webcam' ? 'selected' : '' }}"
             data-value="bi bi-webcam" data-search="webcam">
            <i class="bi bi-webcam" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">webcam</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-webcam-fill' ? 'selected' : '' }}"
             data-value="bi bi-webcam-fill" data-search="webcam-fill">
            <i class="bi bi-webcam-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">webcam-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wechat' ? 'selected' : '' }}"
             data-value="bi bi-wechat" data-search="wechat">
            <i class="bi bi-wechat" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wechat</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-whatsapp' ? 'selected' : '' }}"
             data-value="bi bi-whatsapp" data-search="whatsapp">
            <i class="bi bi-whatsapp" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">whatsapp</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wifi' ? 'selected' : '' }}"
             data-value="bi bi-wifi" data-search="wifi">
            <i class="bi bi-wifi" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wifi</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wifi-1' ? 'selected' : '' }}"
             data-value="bi bi-wifi-1" data-search="wifi-1">
            <i class="bi bi-wifi-1" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wifi-1</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wifi-2' ? 'selected' : '' }}"
             data-value="bi bi-wifi-2" data-search="wifi-2">
            <i class="bi bi-wifi-2" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wifi-2</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wifi-off' ? 'selected' : '' }}"
             data-value="bi bi-wifi-off" data-search="wifi-off">
            <i class="bi bi-wifi-off" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wifi-off</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wikipedia' ? 'selected' : '' }}"
             data-value="bi bi-wikipedia" data-search="wikipedia">
            <i class="bi bi-wikipedia" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wikipedia</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wind' ? 'selected' : '' }}"
             data-value="bi bi-wind" data-search="wind">
            <i class="bi bi-wind" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wind</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window' ? 'selected' : '' }}"
             data-value="bi bi-window" data-search="window">
            <i class="bi bi-window" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-dash' ? 'selected' : '' }}"
             data-value="bi bi-window-dash" data-search="window-dash">
            <i class="bi bi-window-dash" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-dash</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-desktop' ? 'selected' : '' }}"
             data-value="bi bi-window-desktop" data-search="window-desktop">
            <i class="bi bi-window-desktop" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-desktop</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-dock' ? 'selected' : '' }}"
             data-value="bi bi-window-dock" data-search="window-dock">
            <i class="bi bi-window-dock" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-dock</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-fullscreen' ? 'selected' : '' }}"
             data-value="bi bi-window-fullscreen" data-search="window-fullscreen">
            <i class="bi bi-window-fullscreen" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-fullscreen</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-plus' ? 'selected' : '' }}"
             data-value="bi bi-window-plus" data-search="window-plus">
            <i class="bi bi-window-plus" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-plus</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-sidebar' ? 'selected' : '' }}"
             data-value="bi bi-window-sidebar" data-search="window-sidebar">
            <i class="bi bi-window-sidebar" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-sidebar</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-split' ? 'selected' : '' }}"
             data-value="bi bi-window-split" data-search="window-split">
            <i class="bi bi-window-split" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-split</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-stack' ? 'selected' : '' }}"
             data-value="bi bi-window-stack" data-search="window-stack">
            <i class="bi bi-window-stack" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-stack</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-window-x' ? 'selected' : '' }}"
             data-value="bi bi-window-x" data-search="window-x">
            <i class="bi bi-window-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">window-x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-windows' ? 'selected' : '' }}"
             data-value="bi bi-windows" data-search="windows">
            <i class="bi bi-windows" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">windows</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wordpress' ? 'selected' : '' }}"
             data-value="bi bi-wordpress" data-search="wordpress">
            <i class="bi bi-wordpress" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wordpress</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wrench' ? 'selected' : '' }}"
             data-value="bi bi-wrench" data-search="wrench">
            <i class="bi bi-wrench" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wrench</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wrench-adjustable' ? 'selected' : '' }}"
             data-value="bi bi-wrench-adjustable" data-search="wrench-adjustable">
            <i class="bi bi-wrench-adjustable" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wrench-adjustable</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wrench-adjustable-circle' ? 'selected' : '' }}"
             data-value="bi bi-wrench-adjustable-circle" data-search="wrench-adjustable-circle">
            <i class="bi bi-wrench-adjustable-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wrench-adjustable-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-wrench-adjustable-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-wrench-adjustable-circle-fill" data-search="wrench-adjustable-circle-fill">
            <i class="bi bi-wrench-adjustable-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">wrench-adjustable-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x' ? 'selected' : '' }}"
             data-value="bi bi-x" data-search="x">
            <i class="bi bi-x" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-circle' ? 'selected' : '' }}"
             data-value="bi bi-x-circle" data-search="x-circle">
            <i class="bi bi-x-circle" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-circle</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-circle-fill' ? 'selected' : '' }}"
             data-value="bi bi-x-circle-fill" data-search="x-circle-fill">
            <i class="bi bi-x-circle-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-circle-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-diamond' ? 'selected' : '' }}"
             data-value="bi bi-x-diamond" data-search="x-diamond">
            <i class="bi bi-x-diamond" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-diamond</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-diamond-fill' ? 'selected' : '' }}"
             data-value="bi bi-x-diamond-fill" data-search="x-diamond-fill">
            <i class="bi bi-x-diamond-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-diamond-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-lg' ? 'selected' : '' }}"
             data-value="bi bi-x-lg" data-search="x-lg">
            <i class="bi bi-x-lg" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-lg</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-octagon' ? 'selected' : '' }}"
             data-value="bi bi-x-octagon" data-search="x-octagon">
            <i class="bi bi-x-octagon" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-octagon</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-octagon-fill' ? 'selected' : '' }}"
             data-value="bi bi-x-octagon-fill" data-search="x-octagon-fill">
            <i class="bi bi-x-octagon-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-octagon-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-square' ? 'selected' : '' }}"
             data-value="bi bi-x-square" data-search="x-square">
            <i class="bi bi-x-square" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-square</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-x-square-fill' ? 'selected' : '' }}"
             data-value="bi bi-x-square-fill" data-search="x-square-fill">
            <i class="bi bi-x-square-fill" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">x-square-fill</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-xbox' ? 'selected' : '' }}"
             data-value="bi bi-xbox" data-search="xbox">
            <i class="bi bi-xbox" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">xbox</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-yelp' ? 'selected' : '' }}"
             data-value="bi bi-yelp" data-search="yelp">
            <i class="bi bi-yelp" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">yelp</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-yin-yang' ? 'selected' : '' }}"
             data-value="bi bi-yin-yang" data-search="yin-yang">
            <i class="bi bi-yin-yang" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">yin-yang</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-youtube' ? 'selected' : '' }}"
             data-value="bi bi-youtube" data-search="youtube">
            <i class="bi bi-youtube" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">youtube</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-zoom-in' ? 'selected' : '' }}"
             data-value="bi bi-zoom-in" data-search="zoom-in">
            <i class="bi bi-zoom-in" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">zoom-in</span>
        </div>
        <div class="icon-option {{ old('IconClass', $finding->IconClass) == 'bi bi-zoom-out' ? 'selected' : '' }}"
             data-value="bi bi-zoom-out" data-search="zoom-out">
            <i class="bi bi-zoom-out" style="font-size: 1.2rem; color: #0d6efd;"></i>
            <span class="icon-name">zoom-out</span>
        </div>
    </div>
</div>
