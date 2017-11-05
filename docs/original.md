<div class="col-lg-9">

                                                                    
    
    
        <div class="section">

            <h2>

                Introduction

                <a class="permalink" name="introduction" href="#introduction">
                    <i class="fa fa-link "></i>
                </a>

            </h2>

            	<p><code>anomaly.module.variables</code></p>
<p>The Variables module provides a powerful global variables management system.</p>


        </div>

                    
    
    
        <div class="section">

            <h3>

                Features

                <a class="permalink" name="introduction/features" href="#introduction/features">
                    <i class="fa fa-link "></i>
                </a>

            </h3>

            	<p>The Variables module comes with everything you need to manage groups of variables.</p>
<ul>
<li>Streams Based</li>
<li>Multiple Groups</li>
<li>Included Plugin</li>
</ul>


        </div>

        
    
        <div class="section">

            <h3>

                Installation

                <a class="permalink" name="introduction/installation" href="#introduction/installation">
                    <i class="fa fa-link "></i>
                </a>

            </h3>

            	<p>You can install the Variables module with the <code>addon:install</code> command:</p>
<pre class=" language-php"><code class=" language-php">php artisan addon<span class="token punctuation">:</span>install anomaly<span class="token punctuation">.</span>module<span class="token punctuation">.</span>variables</code></pre>
<div class="alert alert-warning">
<strong>Notice:</strong> The Variables module comes installed with PyroCMS out of the box.
</div>


        </div>

        
    
        
    
        <div class="section">

            <h2>

                Usage

                <a class="permalink" name="usage" href="#usage">
                    <i class="fa fa-link "></i>
                </a>

            </h2>

            	<p>This section will show you how to use the addon via API and in the view layer.</p>


        </div>

                    
    
    
        <div class="section">

            <h3>

                Variables

                <a class="permalink" name="usage/variables" href="#usage/variables">
                    <i class="fa fa-link "></i>
                </a>

            </h3>

            	<p>Variables are fields on a group entry that can be used to store information to use throughout your website or application.</p>


        </div>

                    
    
    
        <div class="section">

            <h4>

                Variable Repository

                <a class="permalink" name="usage/variables/variable-repository" href="#usage/variables/variable-repository">
                    <i class="fa fa-link "></i>
                </a>

            </h4>

            	<p>This class will go over the <code>\Anomaly\VariablesModule\Variable\Contract\VariableRepositoryInterface</code></p>


        </div>

                    
    
    
        <div class="section">

            <h5>

                VariableRepositoryInterface::get()

                <a class="permalink" name="usage/variables/variable-repository/variablerepositoryinterface-get" href="#usage/variables/variable-repository/variablerepositoryinterface-get">
                    <i class="fa fa-link "></i>
                </a>

            </h5>

            <p>The <code>get</code> method returns the raw data for the <code>variable</code> specified in a given <code>group</code>. </p>

    <h6>Returns: 
        <code>mixed</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                    <tr>
                                    <td><p>$field</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the variable field in the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>

    <h6>Example</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token variable">$variables</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">get</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">,</span> <span class="token string">'facebook_url'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// https://facebook.com/pyrocms</span></code></pre>




        </div>

        
    
        <div class="section">

            <h5>

                VariableRepositoryInterface::presenter()

                <a class="permalink" name="usage/variables/variable-repository/variablerepositoryinterface-presenter" href="#usage/variables/variable-repository/variablerepositoryinterface-presenter">
                    <i class="fa fa-link "></i>
                </a>

            </h5>

            <p>The <code>presenter</code> method returns the field type presenter for the <code>variable</code> specified in a given <code>group</code>. </p>

    <h6>Returns: 
        <code>\Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter</code> or <code>null</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                    <tr>
                                    <td><p>$field</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the variable field in the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>

    <h6>Example</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token variable">$variables</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">presenter</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">,</span> <span class="token string">'facebook_url'</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">link</span><span class="token punctuation">(</span><span class="token string">'Facebook'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// </span><span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://facebook.com/pyrocms<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></span>Facebook<span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></span></code></pre>




        </div>

        
    
        <div class="section">

            <h5>

                VariableRepositoryInterface::group()

                <a class="permalink" name="usage/variables/variable-repository/variablerepositoryinterface-group" href="#usage/variables/variable-repository/variablerepositoryinterface-group">
                    <i class="fa fa-link "></i>
                </a>

            </h5>

            <p>The <code>group</code> method returns the entire <code>group</code> entry model so you can then easily access any <code>variable</code> on said model.</p>

    <h6>Returns: 
        <code>\Anomaly\Streams\Platform\Entry\Contract\EntryInterface</code> or <code>null</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>

    <h6>Example</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token variable">$group</span> <span class="token operator">=</span> <span class="token variable">$variables</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">group</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">)</span><span class="token punctuation">;</span>

<span class="token keyword">echo</span> <span class="token variable">$group</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">facebook_url</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// https://facebook.com/pyrocms</span>
<span class="token keyword">echo</span> <span class="token variable">$group</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token property">twitter_url</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// https://twitter.com/pyrocms</span>

<span class="token keyword">echo</span> <span class="token variable">$group</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">getFieldTypePresenter</span><span class="token punctuation">(</span><span class="token string">'facebook_url'</span><span class="token punctuation">)</span><span class="token operator">-</span><span class="token operator">&gt;</span><span class="token function">link</span><span class="token punctuation">(</span><span class="token string">'Facebook'</span><span class="token punctuation">)</span><span class="token punctuation">;</span> <span class="token comment" spellcheck="true">// </span><span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://facebook.com/pyrocms<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></span>Facebook<span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></span></code></pre>




        </div>

        
    
        
    
        
    
        <div class="section">

            <h3>

                Plugin

                <a class="permalink" name="usage/plugin" href="#usage/plugin">
                    <i class="fa fa-link "></i>
                </a>

            </h3>

            	<p>This section will go over how to use the plugin that comes with the Variables module.</p>


        </div>

                    
    
    
        <div class="section">

            <h4>

                variable

                <a class="permalink" name="usage/plugin/variable" href="#usage/plugin/variable">
                    <i class="fa fa-link "></i>
                </a>

            </h4>

            <p>The <code>variable</code> function returns the field type presenter for the <code>variable</code> specified in a given <code>group</code>. </p>

    <h6>Returns: 
        <code>\Anomaly\Streams\Platform\Addon\FieldType\FieldTypePresenter</code> or <code>null</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                    <tr>
                                    <td><p>$field</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the variable field in the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>


    <h6>Twig</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token punctuation">{</span><span class="token punctuation">{</span> <span class="token function">variable</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">,</span> <span class="token string">'facebook_url'</span><span class="token punctuation">)</span><span class="token punctuation">.</span><span class="token function">link</span><span class="token punctuation">(</span><span class="token string">'Facebook'</span><span class="token punctuation">)</span><span class="token operator">|</span>raw <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// </span><span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>http://facebook.com/pyrocms<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></span>Facebook<span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></span></code></pre>



        </div>

        
    
        <div class="section">

            <h4>

                variable_value

                <a class="permalink" name="usage/plugin/variable-value" href="#usage/plugin/variable-value">
                    <i class="fa fa-link "></i>
                </a>

            </h4>

            <p>The <code>variable_value</code> function returns the raw data for the <code>variable</code> specified in a given <code>group</code>.</p>

    <h6>Returns: 
        <code>mixed</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                    <tr>
                                    <td><p>$field</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the variable field in the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>


    <h6>Twig</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token punctuation">{</span><span class="token punctuation">{</span> <span class="token function">variable_value</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">,</span> <span class="token string">'facebook_url'</span><span class="token punctuation">)</span> <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// https://facebook.com/pyrocms</span></code></pre>



        </div>

        
    
        <div class="section">

            <h4>

                variable_group

                <a class="permalink" name="usage/plugin/variable-group" href="#usage/plugin/variable-group">
                    <i class="fa fa-link "></i>
                </a>

            </h4>

            <p>The <code>variable_group</code> function returns the entire decorated <code>group</code> entry model so you can then easily access any <code>variable</code> on said model.</p>

    <h6>Returns: 
        <code>\Anomaly\Streams\Platform\Entry\EntryPresenter</code> or <code>null</code>
    </h6>


    <h6>Arguments</h6>

    <table class="table table-bordered table-striped">

        <thead>
        <tr>
                            <th>Key</th>
                            <th>Required</th>
                            <th>Type</th>
                            <th>Default</th>
                            <th>Description</th>
                    </tr>
        </thead>

        <tbody>
                    <tr>
                                    <td><p>$group</p></td>
                                    <td><p>true</p></td>
                                    <td><p>string</p></td>
                                    <td><p>none</p></td>
                                    <td><p>The slug of the group you want to access.</p></td>
                            </tr>
                </tbody>
    </table>


    <h6>Twig</h6>

    <pre class=" language-php"><code class=" language-php"><span class="token punctuation">{</span><span class="token punctuation">{</span> <span class="token function">variable_group</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>facebook_url <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// https://facebook.com/pyrocms (__toString output)</span>
<span class="token punctuation">{</span><span class="token punctuation">{</span> <span class="token function">variable_group</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>facebook_url<span class="token punctuation">.</span>value <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// https://facebook.com/pyrocms (raw value)</span>
<span class="token punctuation">{</span><span class="token punctuation">{</span> <span class="token function">variable_group</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">)</span><span class="token punctuation">.</span>facebook_url<span class="token punctuation">.</span><span class="token function">link</span><span class="token punctuation">(</span><span class="token string">'Facebook'</span><span class="token punctuation">)</span> <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// </span><span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://facebook.com/pyrocms<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></span>Facebook<span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></span>

<span class="token comment" spellcheck="true">// Or set as a Twig variable</span>

<span class="token punctuation">{</span><span class="token operator">%</span> set group <span class="token operator">=</span> <span class="token function">variable_group</span><span class="token punctuation">(</span><span class="token string">'social'</span><span class="token punctuation">)</span> <span class="token operator">%</span><span class="token punctuation">}</span>

<span class="token punctuation">{</span><span class="token punctuation">{</span> group<span class="token punctuation">.</span>facebook_url<span class="token punctuation">.</span><span class="token function">link</span><span class="token punctuation">(</span><span class="token string">'Facebook'</span><span class="token punctuation">)</span> <span class="token punctuation">}</span><span class="token punctuation">}</span> <span class="token comment" spellcheck="true">// </span><span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;</span>a</span> <span class="token attr-name">href</span><span class="token attr-value"><span class="token punctuation">=</span><span class="token punctuation">"</span>https://facebook.com/pyrocms<span class="token punctuation">"</span></span><span class="token punctuation">&gt;</span></span></span>Facebook<span class="token markup"><span class="token tag"><span class="token tag"><span class="token punctuation">&lt;/</span>a</span><span class="token punctuation">&gt;</span></span></span></code></pre>



        </div>

        
    
        
    
        
    
                                            
                </div>
