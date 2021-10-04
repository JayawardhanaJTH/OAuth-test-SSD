<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudDebugger;

class RegisterDebuggeeResponse extends \Google\Model
{
  public $agentId;
  protected $debuggeeType = Debuggee::class;
  protected $debuggeeDataType = '';

  public function setAgentId($agentId)
  {
    $this->agentId = $agentId;
  }
  public function getAgentId()
  {
    return $this->agentId;
  }
  /**
   * @param Debuggee
   */
  public function setDebuggee(Debuggee $debuggee)
  {
    $this->debuggee = $debuggee;
  }
  /**
   * @return Debuggee
   */
  public function getDebuggee()
  {
    return $this->debuggee;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegisterDebuggeeResponse::class, 'Google_Service_CloudDebugger_RegisterDebuggeeResponse');
